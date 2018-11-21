<template>
	<v-layout row>
		<v-flex xs12>
			<v-app id="inspire">
				<v-card>
					<v-card-title class="grey lighten-4">
						<h3 class="headline mb-0">{{ $t('price_list') }}</h3>
					</v-card-title>
					<v-divider></v-divider>
					<v-card-text>
						<v-container grid-list-md>
							<v-layout wrap>
								<v-flex xs12 sm12 md12>
									<div class="row">
										<div class="col-md-2 mt-4 mb-4">
											<a class="btn btn-outline-primary  btn-block" @click.prevent="submitFile()" href="#!" role="button">Excel入力</a>
										</div>
										<div class="form-group">
											<div class="form-inline">
												<div class="form-group mt-4">
													<input aria-describedby="fileHelp" class=" btn form-control-file" id="file" ref="file" v-on:change="handleFileUpload()"
													 type="file" accept=".xls, .xlsx">
												</div>
											</div>
										</div>
										<v-btn slot="activator" color="primary" @click.prevent="submitFile()" dark class="mb-2">Upload</v-btn>
									</div>
								</v-flex>
							</v-layout>
						</v-container>
					</v-card-text>
				</v-card>

				<div>
					<v-data-table :headers="headers" :items="desserts" :pagination.sync="pagination" :total-items="totalDesserts"
					 :loading="loading" class="elevation-1">
						<template slot="items" slot-scope="props">
							<td>{{ props.item.name }}</td>
							<td class="text-xs-right">{{ props.item.calories }}</td>
							<td class="text-xs-right">{{ props.item.fat }}</td>
							<td class="text-xs-right">{{ props.item.carbs }}</td>
							<td class="text-xs-right">{{ props.item.protein }}</td>
							<td class="text-xs-right">{{ props.item.iron }}</td>
						</template>
					</v-data-table>
				</div>
			</v-app>
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
				uploadedFile: null,
				totalDesserts: 0,
				desserts: [],
				loading: true,
				pagination: {},
				headers: [
					{
						text: 'Dessert (100g serving)',
						align: 'left',
						sortable: false,
						value: 'name'
					},
					{ text: 'Calories', value: 'name' },
					{ text: 'Fat (g)', value: 'fat' },
					{ text: 'Carbs (g)', value: 'carbs' },
					{ text: 'Protein (g)', value: 'bbb' },
					{ text: 'Iron (%)', value: 'iron' }
				]
			}
		},
		created() {
		},
		methods: {
			handleFileUpload() {
				this.uploadedFile = this.$refs.file.files[0];
			},
			submitFile() {
				if (!this.uploadedFile) {
					alert('No file selected!')
					return
				}

				console.log(this.uploadedFile.name.split('.').pop())
				if (this.uploadedFile.name.split('.').pop() != 'xls' && this.uploadedFile.name.split('.').pop() != 'xlsx') {
					alert('Wrong file type')
					return
				}

				let formData = new FormData()
				formData.append('file', this.uploadedFile)

				// Display the key/value pairs
				let count = 0
				for (var pair of formData.entries()) {
					count++
				}

				console.log(count)

				axios.post('/api/price-list-file',
					formData,
					{
						headers: {
							'Content-Type': 'multipart/form-data'
						}
					}
				)
					.then(response => {
						alert('Succesfully uploaded!')

						this.uploadedFile = null
						const input = this.$refs.file;
						input.type = 'text';
						input.type = 'file';
					})
					.catch(error => {
						if (error.response) {
							console.log(error.response)
							ErrorHandler.handle(error.response.status, this)
						}
					})
			},
			getDataFromApi() {
				this.loading = true
				return new Promise((resolve, reject) => {
					const { sortBy, descending, page, rowsPerPage } = this.pagination

					console.log('pagination', this.pagination)
					let items = this.getDesserts()
					const total = items.length

					if (this.pagination.sortBy) {
						items = items.sort((a, b) => {
							const sortA = a[sortBy]
							const sortB = b[sortBy]

							if (descending) {
								if (sortA < sortB) return 1
								if (sortA > sortB) return -1
								return 0
							} else {
								if (sortA < sortB) return -1
								if (sortA > sortB) return 1
								return 0
							}
						})
					}

					

					if (rowsPerPage > 0) {
						items = items.slice((page - 1) * rowsPerPage, page * rowsPerPage)
					}

					setTimeout(() => {
						this.loading = false
						resolve({
							items,
							total
						})
					}, 1000)
				})
			},
			getDesserts() {
				return [
					{
						value: false,
						name: 'Frozen Yogurt',
						calories: 159,
						fat: 6.0,
						carbs: 24,
						protein: 4.0,
						iron: '1%'
					},
					{
						value: false,
						name: 'Ice cream sandwich',
						calories: 237,
						fat: 9.0,
						carbs: 37,
						protein: 4.3,
						iron: '1%'
					},
					{
						value: false,
						name: 'Eclair',
						calories: 262,
						fat: 16.0,
						carbs: 23,
						protein: 6.0,
						iron: '7%'
					},
					{
						value: false,
						name: 'Cupcake',
						calories: 305,
						fat: 3.7,
						carbs: 67,
						protein: 4.3,
						iron: '8%'
					},
					{
						value: false,
						name: 'Gingerbread',
						calories: 356,
						fat: 16.0,
						carbs: 49,
						protein: 3.9,
						iron: '16%'
					},
					{
						value: false,
						name: 'Jelly bean',
						calories: 375,
						fat: 0.0,
						carbs: 94,
						protein: 0.0,
						iron: '0%'
					},
					{
						value: false,
						name: 'Lollipop',
						calories: 392,
						fat: 0.2,
						carbs: 98,
						protein: 0,
						iron: '2%'
					},
					{
						value: false,
						name: 'Honeycomb',
						calories: 408,
						fat: 3.2,
						carbs: 87,
						protein: 6.5,
						iron: '45%'
					},
					{
						value: false,
						name: 'Donut',
						calories: 452,
						fat: 25.0,
						carbs: 51,
						protein: 4.9,
						iron: '22%'
					},
					{
						value: false,
						name: 'KitKat',
						calories: 518,
						fat: 26.0,
						carbs: 65,
						protein: 7,
						iron: '6%'
					},
					{
						value: false,
						name: 'Frozen Yogurt',
						calories: 159,
						fat: 6.0,
						carbs: 24,
						protein: 4.0,
						iron: '1%'
					},
					{
						value: false,
						name: 'Ice cream sandwich',
						calories: 237,
						fat: 9.0,
						carbs: 37,
						protein: 4.3,
						iron: '1%'
					},
					{
						value: false,
						name: 'Eclair',
						calories: 262,
						fat: 16.0,
						carbs: 23,
						protein: 6.0,
						iron: '7%'
					},
					{
						value: false,
						name: 'Cupcake',
						calories: 305,
						fat: 3.7,
						carbs: 67,
						protein: 4.3,
						iron: '8%'
					},
					{
						value: false,
						name: 'Gingerbread',
						calories: 356,
						fat: 16.0,
						carbs: 49,
						protein: 3.9,
						iron: '16%'
					},
					{
						value: false,
						name: 'Jelly bean',
						calories: 375,
						fat: 0.0,
						carbs: 94,
						protein: 0.0,
						iron: '0%'
					},
					{
						value: false,
						name: 'Lollipop',
						calories: 392,
						fat: 0.2,
						carbs: 98,
						protein: 0,
						iron: '2%'
					},
					{
						value: false,
						name: 'Honeycomb',
						calories: 408,
						fat: 3.2,
						carbs: 87,
						protein: 6.5,
						iron: '45%'
					},
					{
						value: false,
						name: 'Donut',
						calories: 452,
						fat: 25.0,
						carbs: 51,
						protein: 4.9,
						iron: '22%'
					},
					{
						value: false,
						name: 'KitKat',
						calories: 518,
						fat: 26.0,
						carbs: 65,
						protein: 7,
						iron: '6%'
					},
					{
						value: false,
						name: 'Frozen Yogurt',
						calories: 159,
						fat: 6.0,
						carbs: 24,
						protein: 4.0,
						iron: '1%'
					},
					{
						value: false,
						name: 'Ice cream sandwich',
						calories: 237,
						fat: 9.0,
						carbs: 37,
						protein: 4.3,
						iron: '1%'
					},
					{
						value: false,
						name: 'Eclair',
						calories: 262,
						fat: 16.0,
						carbs: 23,
						protein: 6.0,
						iron: '7%'
					},
					{
						value: false,
						name: 'Cupcake',
						calories: 305,
						fat: 3.7,
						carbs: 67,
						protein: 4.3,
						iron: '8%'
					},
					{
						value: false,
						name: 'Gingerbread',
						calories: 356,
						fat: 16.0,
						carbs: 49,
						protein: 3.9,
						iron: '16%'
					},
					{
						value: false,
						name: 'Jelly bean',
						calories: 375,
						fat: 0.0,
						carbs: 94,
						protein: 0.0,
						iron: '0%'
					},
					{
						value: false,
						name: 'Lollipop',
						calories: 392,
						fat: 0.2,
						carbs: 98,
						protein: 0,
						iron: '2%'
					},
					{
						value: false,
						name: 'Honeycomb',
						calories: 408,
						fat: 3.2,
						carbs: 87,
						protein: 6.5,
						iron: '45%'
					},
					{
						value: false,
						name: 'Donut',
						calories: 452,
						fat: 25.0,
						carbs: 51,
						protein: 4.9,
						iron: '22%'
					},
					{
						value: false,
						name: 'KitKat',
						calories: 518,
						fat: 26.0,
						carbs: 65,
						protein: 7,
						iron: '6%'
					}
				]
			},
			fetchAll(pagination){
				console.log(pagination)
				this.loading = true
				let url = `/api/brands-datatable`
				let params = `?page=${pagination.page}
								&rowsPerPage=${pagination.rowsPerPage}
								&sortBy=${pagination.sortBy}
								&descending=${pagination.descending}`
				
				axios.get(url + params)
					.then(response => {
						
						console.log(response.data.data)
						this.loading = false
					})
					.catch(error => {
						if (error.response) {
							console.log(error.response);
							if (error.response.status === 401) {
								window.location.href = '/login'
							}
						}
					})
			}
		},
		watch: {
			pagination(n,o) {
				console.log(n,o)
				this.fetchAll(n)
				// handler() {
				// 	this.fetchAll('here', this.pagination)
				// 	// this.getDataFromApi()
				// 	// 	.then(data => {
				// 	// 		console.log(data)
				// 	// 		this.desserts = data.items
				// 	// 		this.totalDesserts = data.total
				// 	// 	})
				// },
				// deep: true
			}
		},
		mounted() {
			this.getDataFromApi()
				.then(data => {

					this.desserts = data.items
					this.totalDesserts = data.total
				})
		},
	}
</script>