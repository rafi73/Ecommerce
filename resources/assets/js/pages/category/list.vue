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
							<v-btn slot="activator" color="primary" dark class="mb-2">New Item</v-btn>
							<v-card>
								<v-card-title>
									<span class="headline">{{ formTitle }}</span>
								</v-card-title>

								<v-card-text>
									<v-container grid-list-md>
										<v-layout wrap>
											<v-flex xs12 sm6 md4>
												<v-text-field v-model="editedItem.name" label="Dessert name"></v-text-field>
											</v-flex>
											<v-flex xs12 sm6 md4>
												<v-text-field v-model="editedItem.calories" label="Calories"></v-text-field>
											</v-flex>
											<v-flex xs12 sm6 md4>
												<v-text-field v-model="editedItem.fat" label="Fat (g)"></v-text-field>
											</v-flex>
											<v-flex xs12 sm6 md4>
												<v-text-field v-model="editedItem.carbs" label="Carbs (g)"></v-text-field>
											</v-flex>
											<v-flex xs12 sm6 md4>
												<v-text-field v-model="editedItem.protein" label="Protein (g)"></v-text-field>
											</v-flex>
											<v-content>
												<v-container fluid>
													<v-flex xs12 class="text-xs-center text-sm-center text-md-center text-lg-center">
														<img :src="imageUrl" height="150" v-if="imageUrl" />
														<v-text-field label="Select Image" @click='pickFile' v-model='imageName' prepend-icon='attach_file'></v-text-field>
														<input type="file" style="display: none" ref="image" accept="image/*" @change="onFilePicked">
													</v-flex>
												</v-container>
											</v-content>
										</v-layout>
									</v-container>
								</v-card-text>

								<v-card-actions>
									<v-spacer></v-spacer>
									<v-btn color="blue darken-1" flat @click.native="close">Cancel</v-btn>
									<v-btn color="blue darken-1" flat @click.native="save">Save</v-btn>
								</v-card-actions>
							</v-card>
						</v-dialog>
					</v-card-title>

					<v-divider></v-divider>
					<v-data-table :headers="headers" :items="desserts" :search="search">
						<template slot="items" slot-scope="props">
							<td>{{ props.item.name }}</td>
							<td class="text-xs-right">{{ props.item.calories }}</td>
							<td class="text-xs-right">{{ props.item.fat }}</td>
							<td class="text-xs-right">{{ props.item.carbs }}</td>
							<td class="text-xs-right">{{ props.item.protein }}</td>
							<td class="text-xs-right">{{ props.item.iron }}</td>
							<td class="justify-center layout px-0">
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
						text: 'Dessert (100g serving)',
						align: 'left',
						sortable: false,
						value: 'name'
					},
					{ text: 'Calories', value: 'calories' },
					{ text: 'Fat (g)', value: 'fat' },
					{ text: 'Carbs (g)', value: 'carbs' },
					{ text: 'Protein (g)', value: 'protein' },
					{ text: 'Iron (%)', value: 'iron' },
					{ text: "Actions", value: "name", sortable: false }
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
			this.initialize();
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
				this.editedIndex = this.desserts.indexOf(item)
				this.editedItem = Object.assign({}, item)
				this.dialog = true
			},
			deleteItem(item) {
				const index = this.desserts.indexOf(item)
				confirm('Are you sure you want to delete this item?') && this.desserts.splice(index, 1)
			},
			close() {
				this.dialog = false
				setTimeout(() => {
					this.editedItem = Object.assign({}, this.defaultItem)
					this.editedIndex = -1
				}, 300)
			},
			save() {
				if (this.editedIndex > -1) {
					Object.assign(this.desserts[this.editedIndex], this.editedItem)
				} else {
					this.desserts.push(this.editedItem)
				}
				this.close()
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
						this.imageUrl = fr.result;
						this.imageFile = files[0]; // this is an image file that can be sent to server...
					});
				} else {
					this.imageName = "";
					this.imageFile = "";
					this.imageUrl = "";
				}
			},
		},


	};
</script>