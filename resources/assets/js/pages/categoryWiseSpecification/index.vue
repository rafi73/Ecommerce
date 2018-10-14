<template>
	<v-layout row>
		<v-flex xs12>
			<v-card>
				<progress-bar :show="busy"></progress-bar>
				<v-card-title primary-title class="grey lighten-4">
					<h3 class="headline mb-0">{{ $t('settings') }}</h3>
				</v-card-title>
				<v-divider></v-divider>
				<v-spacer></v-spacer>
				<v-card-text>
					<v-container grid-list-md>
						<v-layout wrap>
							<v-flex xs12 sm8 offset-sm2 lg8 offset-lg2>
								<multiselect v-model="selectedCategory" :options="categories" @select="onSelectCategory" track-by="id" label="name"
								 placeholder="Select Category" selectLabel="" deselectLabel="" selectedLabel="" v-validate="'required'" name="category"
								 data-vv-as="category">
								</multiselect>
							</v-flex>
						</v-layout>
					</v-container>
				</v-card-text>
			</v-card>
			<v-card flat>

			</v-card>
		</v-flex>
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
				specification: {},
				busy: false,
				form: new Form({
					name: "",
					email: ""
				}),
				imageName: "",
				imgInput: "",
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
				specifications: [],
				dialogConfirmDelete: false,
				edit: false,
				dialogInput: false,
				selectedCategory: null,
				categories: [],

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
			pickFile() {
				this.$refs.image.click();
			},
			editItem(item) {
				this.specification = Object.assign({}, item)
				this.dialogInput = true
				this.edit = true
			},
			deleteItem(item) {
				//const index = this.desserts.indexOf(item)
				this.dialogConfirmDelete = true
				this.specification = item
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
					if (result) {
						this.busy = true
						if (this.edit) {
							// Object.assign(this.desserts[this.editedIndex], this.editedItem)
							console.log('edit', this.editedItem)
							this.specification.updated_by = 0

							axios.put('/api/specification', this.specification)
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
							this.specification.created_by = 0
							this.specification.updated_by = 0
							axios.post('/api/specification', this.specification)
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
						this.imgInput = fr.result
						this.imageFile = files[0] // this is an image file that can be sent to server...
						this.specification.image = this.imgInput
						//console.log(this.imgInput, this.imageFile)
					});
				} else {
					this.imageName = "";
					this.imageFile = "";
					this.imgInput = "";
				}
			},
			fetchAll() {
				this.busy = true
				axios.get(`/api/specifications`)
					.then(response => {
						this.specifications = response.data.data
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
				axios.delete(`/api/specification/${this.specification.id}`)
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
			addNew() {
				this.specification = { active: true }
				this.imgInput = ``
				this.selectedCategory = null
				this.dialogInput = true
				this.edit = false
			},
			onSelectCategory(selectedOption, id) {
				if (selectedOption) {
					this.specification.category_id = selectedOption.id
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
		}
	}
</script>