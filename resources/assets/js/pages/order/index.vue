<template>
	<v-layout row>
		<v-flex xs12>
			<progress-bar :show="busy"></progress-bar>
			<v-app id="inspire">
				<v-card>
					<v-card-title class="grey lighten-4">
						<h3 class="headline mb-0">{{ $t('Order') }}</h3>
						<v-spacer></v-spacer>
						<v-text-field v-model="search" md4 append-icon="search" label="Search" single-line hide-details></v-text-field>
						
					</v-card-title>

					<v-divider></v-divider>
					<v-data-table :headers="headers" :items="orders" :search="search">
						<template slot="items" slot-scope="props">
							<td>{{ props.item.id }}</td>
							<td>{{ props.item.customer_name }}</td>
							<td>{{ props.item.customer_email }}</td>
							<td>{{ props.item.total }}</td>
							<td>{{ props.item.created_at }}</td>
							<td>
								<v-icon small class="mr-2" @click="showDetails(props.item)">
									details
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
		<v-dialog v-model="dialogDetails" max-width="800">
			<v-card>
				<v-card-title>
					<span class="headline">Order Details</span>
				</v-card-title>
				<v-card-text>
					<v-container grid-list-md>
						<v-layout class="text-center" wrap>
							<v-data-table :items="orderDetails" class="elevation-1" hide-actions :headers="orderDetailsheaders" >
								<template slot="items" slot-scope="props">
									<td>{{ props.item.product.name }}</td>
									<td >{{ props.item.product.description }}</td>
									<td class="text-xs-center">{{ props.item.quantity }}</td>
									<td class="text-xs-right">{{ props.item.product.price }}</td>
									<td class="text-xs-right">{{ parseFloat(props.item.product.price * props.item.quantity).toFixed(2) }}</td>
								</template>
							</v-data-table>
						</v-layout>
					</v-container>
				</v-card-text>

				<v-card-actions>
					<v-spacer></v-spacer>
					<v-btn color="blue darken-1" flat @click.native="close()">{{ $t('cancel') }}</v-btn>
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
						text: 'Order #',
						value: 'id'
					},
					{
						text: 'Customer Name',
						value: 'customer_name'
					},
					{
						text: 'Customer Email',
						value: 'customer_email'
					},
					{
						text: 'Total',
						value: 'total'
					},
					{
						text: 'Date',
						value: 'created_at'
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
				dialogDetails: false,
				orderDetailsheaders: [
					{
						text: 'Product',
						value: 'product.name'
					},
					{
						text: 'Description',
						value: 'product.description'
					},
					{
						text: 'Quantity',
						value: 'quantity'
					},
					{
						text: 'Unit Pice',
						value: 'created_at'
					},
					{
						text: "Total",
						value: "name",
					}
				],
				orders : [],
				orderDetails: []
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

		},
		methods: {
			
			fetchAll() {
				this.busy = true
				axios.get(`/api/orders`)
				.then(response => {
					this.orders = response.data.data
					console.log(response.data.data)
					this.busy = false
				})
				.catch(error => {
					if (error.response) {
						console.log(error.response)
					}
				})
			},
			showDetails(order){
				console.log(order)
				this.dialogDetails = true
				this.orderDetails = order.orderDetails
			},
			close() {
				this.dialogDetails = false
			},
			
		}
	}
</script>