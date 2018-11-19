<template>
	<v-layout row>
		<v-flex xs12>
			<progress-bar :show="busy"></progress-bar>
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
									<!-- <img :src="imgInput" height="150" v-if="imgInput" />
									<v-text-field :label="`${$t('sub_category_image')}`" @click='pickFile' v-model='imageName' prepend-icon='attach_file'></v-text-field>
									<input type="file" style="display: none" ref="image" accept="image/*" @change="onFilePicked"> -->

									<div class="row">
										<div class="col-md-2 mt-4 mb-4">
											<a class="btn btn-outline-primary  btn-block" @click.prevent="submitFile()" href="#!" role="button">Excel入力</a>
										</div>
										<div class="form-group">
											<div class="form-inline">
												<div class="form-group mt-4">
													<input aria-describedby="fileHelp"  class=" btn form-control-file" id="file" ref="file" v-on:change="handleFileUpload()" type="file" accept=".xls, .xlsx">
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
				subCategory: {},
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
				edit: false,
				dialogInput: false,
				selectedCategory: null,
				categories: [],
				uploadedFile : null,

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
		},
		methods: {
			handleFileUpload() {
                this.uploadedFile = this.$refs.file.files[0];
			},
			submitFile() {
                if(!this.uploadedFile)
                {
					alert('No file selected!')
                    return
                }

                console.log(this.uploadedFile.name.split('.').pop())
                if(this.uploadedFile.name.split('.').pop() != 'xls' && this.uploadedFile.name.split('.').pop() != 'xlsx')
                {
					alert('Wrong file type')
                    return
                }

                let formData = new FormData()
                formData.append('file', this.uploadedFile)

                // Display the key/value pairs
                let count = 0
                for (var pair of formData.entries()) 
                {
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
                        this.$swal({
                            title: "アップロード完了",
                            text: 'Uploaded',
                            type: "success",
                            confirmButtonText: "OK"
                        })

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
		}
	}
</script>