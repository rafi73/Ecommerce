<template>
	<v-layout row>
		<v-flex xs12>
			<progress-bar :show="busy"></progress-bar>
			<v-app id="inspire">
				<v-card>
					<v-card-title class="grey lighten-4">
						<h3 class="headline mb-0">{{ $t('brand') }}</h3>
						<v-spacer></v-spacer>
						<v-text-field v-model="search" md4 append-icon="search" label="Search" single-line hide-details></v-text-field>
						<v-btn @click.prevent="addNew()" slot="activator" color="primary" dark class="mb-2">{{ $t('new_item') }}</v-btn>
						<v-dialog v-model="dialogInput" max-width="1000px">
							<v-card>
								<v-card-title>
									<span class="headline">{{ formTitle }}</span>
								</v-card-title>
								<v-card-text>
									<v-container grid-list-md>
										<v-layout wrap>
											<v-flex xs12 sm12 md12>
												<v-text-field v-validate="'required'" v-model="brand.name" :counter="10" :error-messages="errors.collect('name')" :label="`${$t('brand_name')}`" data-vv-name="name" required ></v-text-field>
											</v-flex>
											<v-flex xs12 sm12 md12>
												<v-textarea v-model="brand.description" :counter="10" :error-messages="errors.collect('description')" :label="`${$t('brand_description')}`" data-vv-name="description" required ></v-textarea>
											</v-flex>
											
											<v-flex xs12 sm12 md12>
												<img :src="logo.imgInput" height="150" v-if="logo.imgInput" />
												<v-text-field :label="`${$t('brand_logo')}`" @click='pickFileLogo' v-model='logo.imageName' prepend-icon='attach_file'></v-text-field>
												<input type="file" style="display: none" ref="logo" accept="image/*" @change="onFilePickedLogo">
											</v-flex>

											<v-flex xs12 sm12 md12>
												<img :src="banner.imgInput" height="150" v-if="banner.imgInput" />
												<v-text-field :label="`${$t('brand_banner')}`" @click='pickFileBanner()' v-model='banner.imageName' prepend-icon='attach_file'></v-text-field>
												<input type="file" style="display: none" ref="banner" accept="image/*" @change="onFilePickedBanner">
											</v-flex>
											
											<v-checkbox :label="`${$t('brand_active')}: ${brand.active}`" v-model="brand.active" ></v-checkbox>
										</v-layout>
									</v-container>
								</v-card-text>

								<v-card-actions>
									<v-spacer></v-spacer>
									<v-btn color="blue darken-1" flat @click.native="close()">{{ $t('cancel') }}</v-btn>
									<v-btn color="blue darken-1" flat @click.native="save()">{{ $t('save') }}</v-btn>
								</v-card-actions>
							</v-card>
						</v-dialog>
					</v-card-title>

					<v-divider></v-divider>
					<v-data-table :headers="headers" :items="brands" :search="search">
						<template slot="items" slot-scope="props">
							<td>{{ props.item.name }}</td>
							<td>{{ props.item.description }}</td>
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
		<v-dialog v-model="dialogConfirmDelete" max-width="500">
			<v-card>
				<v-card-title class="headline">{{ $t('delete_confirm_title') }}</v-card-title>
				<v-card-text>{{ $t('delete_confirm_text') }}</v-card-text>
				<v-card-actions>
					<v-spacer></v-spacer>
					<v-btn color="blue darken-1" flat="flat" @click="dialogConfirmDelete = false">
						Disagree
					</v-btn>

					<v-btn color="red darken-1" flat="flat" @click="erase()" >
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
	import { mapGetters } from "vuex"
	import Multiselect from 'vue-multiselect'

	export default {
		name: "settings-view",
		components: {
			"profile-view": Profile,
			"password-view": Password,
			Multiselect 
		},
		data() {
			return {
				brand: {},
				busy: false,
				form: new Form({
					name: "",
					email: ""
				}),
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
				brands: [],
				dialogConfirmDelete: false,
				edit : false,
				dialogInput : false,
				selectedCategory : null,
				categories: [],
				logo : {
					imageName: "",
					imgInput: "",
					imageFile: "",
				},
				banner : {
					imageName: "",
					imgInput: "",
					imageFile: "",
				}
				

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
			this.fetchCategories()
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
			pickLogo() {
				this.$refs.logo.click();
			},
			pickBanner() {
				this.$refs.banner.click();
			},
			editItem(item) {
				this.brand = Object.assign({}, item)
				this.dialogInput = true
				this.edit = true
				this.logo.imageName = null
				this.logo.imgInput = this.brand.logo
				this.banner.imageName = null
				this.banner.imgInput = this.brand.banner
			},
			deleteItem(item) {
				//const index = this.desserts.indexOf(item)
				this.dialogConfirmDelete = true
				this.brand = item
				//confirm('Are you sure you want to delete this item?') && this.desserts.splice(index, 1)
			},
			close() {
				this.dialogInput = false
				setTimeout(() => {
					this.editedItem = Object.assign({}, this.defaultItem)
					this.editedIndex = -1
				}, 300)
			},
			save() {
				//if (this.formHasErrors()) return
				this.$validator.validate().then(result => {
                    if (result){
						this.busy = true
						if (this.edit) {
							// Object.assign(this.desserts[this.editedIndex], this.editedItem)
							console.log('edit', this.editedItem)
							this.brand.updated_by = 0

							axios.put('/api/brand', this.brand)
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
							//this.desserts.push(this.editedItem)
							console.log('save', this.editedItem)
							this.brand.created_by = 0
							this.brand.updated_by = 0
							axios.post('/api/brand', this.brand)
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
						this.edit = false
					}
				})
				
			},
			onLogoPicked(e) {
				const files = e.target.files;
				if (files[0] !== undefined) {
					this.logo = files[0].name;
					if (this.logo.lastIndexOf(".") <= 0) {
						return;
					}
					const fr = new FileReader();
					fr.readAsDataURL(files[0]);
					fr.addEventListener("load", () => {
						this.logo.imgInput = fr.result
						this.logo.imageFile = files[0] // this is an image file that can be sent to server...
						this.brand.logo = this.logo.imgInput
						//console.log(this.logo.imgInput, this.logo.imageFile)
					});
				} else {
					this.logo = "";
					this.logo.imageFile = "";
					this.logo.imgInput = "";
				}
			},
			onBannerPicked(e) {
				const files = e.target.files;
				if (files[0] !== undefined) {
					this.logo = files[0].name;
					if (this.logo.lastIndexOf(".") <= 0) {
						return;
					}
					const fr = new FileReader();
					fr.readAsDataURL(files[0]);
					fr.addEventListener("load", () => {
						this.logo.imgInput = fr.result
						this.logo.imageFile = files[0] // this is an image file that can be sent to server...
						this.brand.banner = this.logo.imgInput
						//console.log(this.logo.imgInput, this.logo.imageFile)
					});
				} else {
					this.logo = "";
					this.logo.imageFile = "";
					this.logo.imgInput = "";
				}
			},
			fetchAll() {
				this.busy = true
				axios.get(`/api/brands`)
				.then(response => {
					this.brands = response.data.data
					console.log(response.data.data)
					this.busy = false
				})
				.catch(error => {
					if (error.response) {
						console.log(error.response)
					}
				})
			},
			erase() {
				this.dialogConfirmDelete = false
				this.busy = true
				axios.delete(`/api/brand/${this.brand.id}`)
				.then(response => {
					this.busy = false
					this.fetchAll()
				})
				.catch(error => {
					if (error.response) {
						console.log(error.response)
					}
				})
			},
			addNew(){
				this.brand = {active: true}
				this.logo.imgInput = ``
				this.selectedCategory = null
				this.dialogInput = true
				this.edit = false
				this.logo.imageName = null
				this.banner.imageName = null
				this.logo.imgInput = null
				this.banner.imgInput = null
			},
			onSelectCategory(selectedOption, id){
                if(selectedOption){
					this.brand.category_id = selectedOption.id
				}
			},
			fetchCategories() {
				this.busy = true
				axios.get(`/api/categories`)
				.then(response => {
					this.categories = response.data.data
					console.log(response.data.data)
					this.busy = false
				})
				.catch(error => {
					if (error.response) {
						console.log(error.response)
					}
				})
			},
			pickFileLogo() {
				this.$refs.logo.click();
			},
			onFilePickedLogo(e) {
				const files = e.target.files;
				if (files[0] !== undefined) {
					this.logo.imageName = files[0].name;
					if (this.logo.imageName.lastIndexOf(".") <= 0) {
						return;
					}
					const fr = new FileReader();
					fr.readAsDataURL(files[0]);
					fr.addEventListener("load", () => {
						this.logo.imgInput = fr.result
						this.logo.imageFile = files[0] // this is an image file that can be sent to server...
						this.brand.logo = this.logo.imgInput
						//console.log(this.logo.imgInput, this.logo.imageFile)
					});
				} else {
					this.logo.imageName = "";
					this.logo.imageFile = "";
					this.logo.imgInput = "";
				}
			},
			pickFileBanner() {
				this.$refs.banner.click();
			},
			onFilePickedBanner(e) {
				const files = e.target.files;
				if (files[0] !== undefined) {
					this.banner.imageName = files[0].name;
					if (this.banner.imageName.lastIndexOf(".") <= 0) {
						return;
					}
					const fr = new FileReader();
					fr.readAsDataURL(files[0]);
					fr.addEventListener("load", () => {
						this.banner.imgInput = fr.result
						this.banner.imageFile = files[0] // this is an image file that can be sent to server...
						this.brand.banner = this.banner.imgInput
						//console.log(this.banner.imgInput, this.banner.imageFile)
					});
				} else {
					this.banner.imageName = "";
					this.banner.imageFile = "";
					this.banner.imgInput = "";
				}
			},
		}
	}
</script>