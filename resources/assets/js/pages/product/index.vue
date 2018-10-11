<template>
	<v-layout row>
		<v-flex xs12>
			<progress-bar :show="busy"></progress-bar>
			<v-app id="inspire">
				<v-card>
					<v-card-title class="grey lighten-4">
						<h3 class="headline mb-0">{{ $t('category') }}</h3>
						<v-spacer></v-spacer>
						<v-text-field v-model="search" md4 append-icon="search" label="Search" single-line hide-details></v-text-field>
						<v-dialog v-model="dialog" max-width="1000px">
							<v-btn slot="activator" color="primary" dark class="mb-2">{{ $t('new_item') }}</v-btn>
							<v-card>
								<v-card-title>
									<span class="headline">{{ formTitle }}</span>
								</v-card-title>

								<v-card-text>
									<v-container grid-list-md>
										<v-layout wrap>
											<v-flex xs12 sm12 md12>
												<v-text-field v-model="category.name" :label="`${$t('category_name')}`"></v-text-field>
											</v-flex>
											<v-flex xs12 sm12 md12>
												<v-text-field v-model="category.description" :label="`${$t('category_description')}`"></v-text-field>
											</v-flex>
											<v-flex xs12 sm12 md12>
												<img :src="imageUrl" height="150" v-if="imageUrl" />
												<v-text-field :label="`${$t('category_image')}`" @click='pickFile' v-model='imageName' prepend-icon='attach_file'></v-text-field>
												<input type="file" style="display: none" ref="image" accept="image/*" @change="onFilePicked">
											</v-flex>
											<v-checkbox :label="`${$t('category_active')}: ${category.active}`" v-model="category.active"></v-checkbox>
										</v-layout>
									</v-container>
								</v-card-text>

								<v-card-actions>
									<v-spacer></v-spacer>
									<v-btn color="blue darken-1" flat @click.native="close">{{ $t('cancel') }}</v-btn>
									<v-btn color="blue darken-1" flat @click.native="save">{{ $t('save') }}</v-btn>
								</v-card-actions>
							</v-card>
						</v-dialog>
					</v-card-title>

					<v-divider></v-divider>
					<v-data-table :headers="headers" :items="categories" :search="search">
						<template slot="items" slot-scope="props">
							<td>{{ props.item.name }}</td>
							<td>{{ props.item.description }}</td>
							<td>{{ props.item.image }}</td>
							<td>{{ props.item.active }}</td>
							<td>
								<v-icon small class="mr-2" @click="editItem(props.item)">
									edit
								</v-icon>
								<v-icon small @click="deleteItem(props.item)">
									delete
								</v-icon>
							</td>
						</template>
						<v-alert slot="no-results" :value="true" color="error" icon="warning">
							Your search for "{{ search }}" found no results.
						</v-alert>
					</v-data-table>
				</v-card>
			</v-app>
		</v-flex>
		<v-dialog v-model="dialogConfirm" max-width="500">
			<v-card>
				<v-card-title class="headline">{{ $t('delete_confirm_title') }}</v-card-title>
				<v-card-text>{{ $t('delete_confirm_text') }}</v-card-text>
				<v-card-actions>
					<v-spacer></v-spacer>
					<v-btn color="green darken-1" flat="flat" @click="dialogConfirm = false">
						Disagree
					</v-btn>

					<v-btn color="green darken-1" flat="flat" @click="erase()" >
						Agree
					</v-btn>
				</v-card-actions>
			</v-card>
		</v-dialog>
	</v-layout>
</template>

<script>
	import Profile from "~/pages/settings/profile";
	import Password from "~/pages/settings/password";
	import Form from "vform";
	import { mapGetters } from "vuex";

	export default {
		name: "settings-view",
		components: {
			"profile-view": Profile,
			"password-view": Password
		},
		data() {
			return {
				category: {},
				busy: false,
				form: new Form({
					name: "",
					email: ""
				}),
				imageName: "",
				imageUrl: "",
				imageFile: "",
				dialog: false,
				headers: [
					{
						text: 'Name',
						value: 'name'
					},
					{
						text: 'Description',
						value: 'description'
					},
					{
						text: 'Image',
						value: 'image'
					},
					{
						text: 'Active',
						value: 'active'
					},
					{
						text: "Actions",
						value: "name",
						sortable: false
					}
				],
				desserts: [],
				editedIndex: -1,
				editedItem: {
					name: "",
					calories: 0,
					fat: 0,
					carbs: 0,
					protein: 0
				},
				defaultItem: {
					name: "",
					calories: 0,
					fat: 0,
					carbs: 0,
					protein: 0
				},
				search: '',
				categories: [],
				dialogConfirm: false
			}
		},
		computed: {
			formTitle() {
				return this.editedIndex === -1 ? "New Item" : "Edit Item";
			}
		},
		watch: {
			dialog(val) {
				val || this.close();
			}
		},
		created() {
			//this.initialize();
			this.fetchAll()
		},
		methods: {
			async update() {
				if (await this.formHasErrors()) return;

				this.$emit("busy", true);

				const { data } = await this.form.patch("/api/settings/profile");

				await this.$store.dispatch("updateUser", { user: data });
				this.$emit("busy", false);

				this.$store.dispatch("responseMessage", {
					type: "success",
					text: this.$t("info_updated")
				});
			},
			pickFile() {
				this.$refs.image.click();
			},
			initialize() {
				this.desserts = [
					{
						name: 'Frozen Yogurt',
						calories: 159,
						fat: 6.0,
						carbs: 24,
						protein: 4.0
					},
					{
						name: 'Ice cream sandwich',
						calories: 237,
						fat: 9.0,
						carbs: 37,
						protein: 4.3
					},
					{
						name: 'Eclair',
						calories: 262,
						fat: 16.0,
						carbs: 23,
						protein: 6.0
					},
					{
						name: 'Cupcake',
						calories: 305,
						fat: 3.7,
						carbs: 67,
						protein: 4.3
					},
					{
						name: 'Gingerbread',
						calories: 356,
						fat: 16.0,
						carbs: 49,
						protein: 3.9
					},
					{
						name: 'Jelly bean',
						calories: 375,
						fat: 0.0,
						carbs: 94,
						protein: 0.0
					},
					{
						name: 'Lollipop',
						calories: 392,
						fat: 0.2,
						carbs: 98,
						protein: 0
					},
					{
						name: 'Honeycomb',
						calories: 408,
						fat: 3.2,
						carbs: 87,
						protein: 6.5
					},
					{
						name: 'Donut',
						calories: 452,
						fat: 25.0,
						carbs: 51,
						protein: 4.9
					},
					{
						name: 'KitKat',
						calories: 518,
						fat: 26.0,
						carbs: 65,
						protein: 7
					}
				]
			},
			editItem(item) {
				// this.editedIndex = this.desserts.indexOf(item)
				// this.editedItem = Object.assign({}, item)

				this.category = item
				this.dialog = true

			},
			deleteItem(item) {
				//const index = this.desserts.indexOf(item)
				this.dialogConfirm = true
				this.category = item
				//confirm('Are you sure you want to delete this item?') && this.desserts.splice(index, 1)
			},
			close() {
				this.dialog = false
				setTimeout(() => {
					this.editedItem = Object.assign({}, this.defaultItem)
					this.editedIndex = -1
				}, 300)
			},
			save() {
				this.busy = true
				if (this.editedIndex > -1) {
					Object.assign(this.desserts[this.editedIndex], this.editedItem)
					console.log('edit', this.editedItem)

					axios.put('/api/category', this.category)
						.then(
							(response) => {
								console.log(response)
								this.fetchAll()
							}
						)
						.catch(
							(error) => {
								console.log(error)
							}
						)
				} else {
					this.desserts.push(this.editedItem)
					console.log('save', this.editedItem)

					axios.post('/api/category', this.category)
						.then(
							(response) => {
								console.log(response)
								this.fetchAll()
							}
						)
						.catch(
							(error) => {
								console.log(error)
							}
						)
				}
				this.close()
				this.busy = false

			},
			onFilePicked(e) {
				const files = e.target.files;
				if (files[0] !== undefined) {
					this.imageName = files[0].name;
					if (this.imageName.lastIndexOf(".") <= 0) {
						return;
					}
					const fr = new FileReader();
					fr.readAsDataURL(files[0]);
					fr.addEventListener("load", () => {
						this.imageUrl = fr.result
						this.imageFile = files[0] // this is an image file that can be sent to server...
						this.category.image = this.imageUrl
						//console.log(this.imageUrl, this.imageFile)
					});
				} else {
					this.imageName = "";
					this.imageFile = "";
					this.imageUrl = "";
				}
			},
			fetchAll() {
				this.busy = true
				axios.get(`/api/categories`, {
					headers: {
						Authorization: 'Bearer ' + localStorage.getItem('token')
					}
				})
				.then(response => {
					this.categories = response.data.data
					console.log(response.data.data)
					this.busy = false
				})
				.catch(error => {
					if (error.response) {
						console.log(error.response);

					}
				})
			},
			erase() {
				this.dialogConfirm = false
				this.busy = true
				axios.delete(`/api/category/${this.category.id}`)
				.then(response => {
					this.busy = false
					this.fetchAll()
				})
				.catch(error => {
					if (error.response) {
						console.log(error.response)
					}
				})
			}
		}
	}
</script>