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
											<a class="btn btn-outline-primary  btn-block" @click.prevent="submitFile()" href="#!" role="button">Upload price list</a>
										</div>
										<div class="form-group">
											<div class="form-inline">
												<div class="form-group mt-4">
													<input aria-describedby="fileHelp" class=" btn form-control-file" id="file" ref="file" v-on:change="handleFileUpload()"
													 type="file" accept=".xls, .xlsx">
												</div>
											</div>
										</div>
										<!-- <v-btn slot="activator" color="primary" @click.prevent="submitFile()" dark class="mb-2">Upload</v-btn> -->
										<v-btn :loading="loading3" :disabled="loading3" color="blue-grey" class="white--text" @click.prevent="submitFile()">
											Upload
											<v-icon right dark>cloud_upload</v-icon>
										</v-btn>
									</div>
								</v-flex>
							</v-layout>
						</v-container>
					</v-card-text>
				</v-card>
			</v-app>
		</v-flex>
		<v-snackbar v-model="snackbar.active" :bottom="snackbar.y === 'bottom'" :left="snackbar.x === 'left'" :multi-line="snackbar.mode === 'multi-line'"
		 :right="snackbar.x === 'right'" :timeout="snackbar.timeout" :top="snackbar.y === 'top'" :vertical="snackbar.mode === 'vertical'">
			{{ snackbar.message }}
			<v-btn color="pink" flat @click="snackbar.active = false">Close</v-btn>
		</v-snackbar>
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
				loading3: false,
				snackbar: {
					active: false,
					y: 'bottom',
					x: 'right',
					mode: '',
					timeout: 3000,
					message: ''
				},
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

				this.loading3 = true
				axios.post('/api/price-list-file',
					formData,
					{
						headers: {
							'Content-Type': 'multipart/form-data'
						}
					}
				)
					.then(response => {
						this.showSnackbar('Succesfully uploaded !')
						this.uploadedFile = null
						const input = this.$refs.file
						input.type = 'text'
						input.type = 'file'
						this.loading3 = false
					})
					.catch(error => {
						if (error.response) {
							console.log(error.response)
							ErrorHandler.handle(error.response.status, this)
						}
					})
			},
			showSnackbar(message) {
				this.snackbar.active = true
				this.snackbar.message = message
			},
		}
	}
</script>