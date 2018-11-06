<template>
	<v-layout row>
		<v-flex xs12>
			<progress-bar :show="busy"></progress-bar>
			<v-app id="inspire">
				<v-card>
					<v-card-title class="grey lighten-4">
						<h3 class="headline mb-0">{{ $t('product') }}</h3>
						<v-spacer></v-spacer>
						<v-text-field v-model="search" md4 append-icon="search" label="Search" single-line hide-details></v-text-field>
						<v-btn @click.prevent="addNew()" slot="activator" color="primary" dark class="mb-2">{{ $t('new_item') }}</v-btn>
						<v-dialog v-model="dialogInput" max-width="1000">
							<v-card>
								<v-card-title>
									<span class="headline">{{ formTitle }}</span>
								</v-card-title>
								<v-card-text>
									<v-container grid-list-md>
										<v-layout wrap>
											<v-flex xs12 sm4 md4>
												<multiselect v-model="selectedCategory" :options="categories" @select="onSelectCategory" track-by="id" label="name"
													placeholder="Select Category" selectLabel="" :error-messages="errors.collect('category')" deselectLabel="" selectedLabel="" v-validate="'required'" name="category">
												</multiselect>
											</v-flex>
											<v-flex xs12 sm4 md4>
												<multiselect v-model="selectedSubCategory" :options="subCategories" @select="onSelectSubCategory" track-by="id" label="name"
													placeholder="Select Sub Category" selectLabel="" deselectLabel="" selectedLabel=""  name="category">
												</multiselect>
											</v-flex>
											<v-flex xs12 sm4 md4>
												<multiselect v-model="selectedBrand" :options="brands" @select="onSelectBrand" track-by="id" label="name"
													placeholder="Select Brand" selectLabel="" deselectLabel="" selectedLabel="" v-validate="'required'" name="category"
													data-vv-as="category">
												</multiselect>
											</v-flex>

											<v-flex xs12 sm12 md12 >
												<v-text-field v-validate="'required'" v-model="product.name" :counter="200" 
												:error-messages="errors.collect('name')" :label="`${ $t('product_name')}`" ></v-text-field>
											</v-flex>

											<v-flex xs12 sm12 md12>
												<v-textarea v-validate="'required'" v-model="product.description" :counter="200" :error-messages="errors.collect('description')" 
												:label="`${$t('product_description')}`" data-vv-name="description" required ></v-textarea>
											</v-flex>

											<v-flex xs12 sm12 md12>
												<img :src="imgInput" height="150" v-if="imgInput" />
												<v-text-field :label="`${$t('product_image')}`" @click='pickFile' v-model='imageName' prepend-icon='attach_file'></v-text-field>
												<input type="file" style="display: none" ref="image" accept="image/*" @change="onFilePicked">
											</v-flex>
											
											<v-flex xs12 sm12 md12 >
												<v-text-field v-validate="'required'" v-model="product.reference" :counter="200" 
												:error-messages="errors.collect('name')" :label="`${ $t('product_reference')}`" ></v-text-field>
											</v-flex>

											<v-flex xs12 sm12 md12 >
												<v-text-field v-validate="'required'" v-model="product.condition" :counter="200" 
												:error-messages="errors.collect('name')" :label="`${ $t('product_conditoin')}`" ></v-text-field>
											</v-flex>

											<v-flex xs12 sm12 md12 >
												<v-text-field v-validate="'required|decimal:2'" v-model="product.price" :counter="10" 
												:error-messages="errors.collect('price')" :label="`${ $t('product_price')}`" data-vv-name="price" required></v-text-field>
											</v-flex>

											<v-flex xs12 sm12 md12 >
												<v-text-field v-validate="'required|decimal:2'" v-model="product.discount_price" :counter="10" 
												:error-messages="errors.collect('discount price')" :label="`${ $t('product_discount_price')}`" data-vv-name="discount_price" required ></v-text-field>
											</v-flex>

											<v-flex xs12 sm12 md12>
												<v-textarea v-validate="'required'" v-model="product.more_info" :counter="200" :error-messages="errors.collect('more info')" 
												:label="`${$t('product_more_info')}`" name="more_info" data-vv-name="more info" required ></v-textarea>
											</v-flex>

											<v-flex xs12 sm12 md12>
												<v-textarea v-validate="'required'" v-model="product.inside_box" :counter="200" :error-messages="errors.collect('inside_box')" 
												:label="`${$t('product_inside_box')}`" data-vv-name="inside_box" required ></v-textarea>
											</v-flex>

											<v-flex xs12 sm12 md12 v-for="(specification, index) in categoryWiseSpecifications" :key="index">
												<v-text-field v-validate="'required'" v-model="productSpecifications[specification.specification.id]" :counter="200" 
												:error-messages="errors.collect('name')" :label="`${specification.specification.name}`" required></v-text-field>
											</v-flex>

											<v-checkbox :label="`${$t('product_active')}: ${product.active}`" ></v-checkbox>
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
					<v-data-table :headers="headers" :items="products" :search="search">
						<template slot="items" slot-scope="props">
							<td>{{ props.item.name }}</td>
							<td>{{ props.item.category.name }}</td>
							<td>
								<div class="image-container">
									<img class="object-fit-cover" :src="props.item.image || '/img/v.png'" />
								</div>
							</td>
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
				product: {
					specification: {}
				},
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
						text: 'Category',
						value: 'category'
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
				subCategories: [],
				dialogConfirmDelete: false,
				edit : false,
				dialogInput : false,
				selectedCategory : null,
				selectedSubCategory : null,
				categories: [],
				selectedBrand : null,
				brands: [],
				categoryWiseSpecifications: [],
				productSpecifications: {},
				products: [],
				productWiseSpecifications: []
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
			this.fetchAll()
			this.fetchCategories()
			this.fetchBrands()

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
				this.product = Object.assign({}, item)
				this.imgInput = this.product.image
				this.selectedCategory = this.categories.find(x => x.id === this.product.category.id)
				this.selectedSubCategory = this.subCategories.find(x => x.id === this.product.sub_category_id)
				this.selectedBrand = this.brands.find(x => x.id === this.product.brand_id)
				this.fetchProductWiseSpecifications(this.product.id)
				this.fetchCategoryWiseSpecifications(this.product.category.id)
				this.dialogInput = true
				this.edit = true
				this.productSpecifications = {}
			},
			deleteItem(item) {
				//const index = this.desserts.indexOf(item)
				this.dialogConfirmDelete = true
				this.product = item
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
				this.product.specification = this.productSpecifications

				//if (this.formHasErrors()) return
				this.$validator.validate().then(result => {
                    if (result){
						this.busy = true
						if (this.edit) {
							// Object.assign(this.desserts[this.editedIndex], this.editedItem)
							console.log('edit', this.editedItem)
							

							axios.put('/api/product', this.product)
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

							
							this.product.created_by = 0
							this.product.updated_by = 0

							axios.post('/api/product', this.product)
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
						this.productSpecifications = {}
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
						this.product.image = this.imgInput
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
				axios.get(`/api/products`)
				.then(response => {
					this.products = response.data.data
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
				axios.delete(`/api/product/${this.product.id}`)
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
				this.product = {image: null, active: true}
				this.imgInput = ``
				this.selectedCategory = null
				this.selectedSubCategory = null
				this.selectedBrand = null
				this.dialogInput = true
				this.edit = false,
				this.imageName = null
			},
			onSelectCategory(selectedOption, id){
                if(selectedOption){
					this.product.category_id = selectedOption.id
					console.log(selectedOption.id)
					this.fetchSubCategories(selectedOption.id)
					this.fetchCategoryWiseSpecifications(selectedOption.id)
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
			onSelectSubCategory(selectedOption, id){
                if(selectedOption){
					this.product.sub_category_id = selectedOption.id
				}
			},
			fetchSubCategories(categoryId) {
				this.busy = true
				axios.get(`/api/sub-category/${categoryId}/category`)
				.then(response => {
					this.subCategories = response.data.data
					console.log(response.data.data)
					this.busy = false
				})
				.catch(error => {
					if (error.response) {
						console.log(error.response)
					}
				})
			},
			onSelectBrand(selectedOption, id){
                if(selectedOption){
					this.product.brand_id = selectedOption.id
				}
			},
			fetchBrands() {
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
			fetchCategoryWiseSpecifications(catgoryId) {
				this.busy = true
				axios.get(`/api/category-wise-specification/${catgoryId}/category`)
				.then(response => {
					this.categoryWiseSpecifications = response.data.data
					console.log(response.data.data)
					this.busy = false
				})
				.catch(error => {
					if (error.response) {
						console.log(error.response)
					}
				})
			},
			fetchProductWiseSpecifications(productId) {
				this.busy = true
				axios.get(`/api/product-wise-specification/${productId}/product`)
				.then(response => {
					this.productWiseSpecifications = response.data.data

					let temp = {}

					this.productSpecifications = {}
					this.productWiseSpecifications.forEach((element, index) => {
						this.productSpecifications[element.specification_id] = element.description
					})

					console.log('check', this.productSpecifications)

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