<template>
	<v-layout row>
		<v-flex xs12 >
			<v-card>
				<progress-bar :show="busy"></progress-bar>
				<v-card-title primary-title class="grey lighten-4">
					<h3 class="headline mb-0">{{ $t('category') }}</h3>
				</v-card-title>
				<v-divider></v-divider>

				<v-card flat>
                    <form @submit.prevent="update" @keydown="form.onKeydown($event)">
                        <v-card-title primary-title>
                            <h5 class="subheading mb-0">{{ $t('your_info') }}</h5>
                        </v-card-title>
                        <v-card-text>

                            <!-- Name -->
                            <text-input :form="form" :label="$t('name')" :v-errors="errors" :value.sync="form.name" counter="30" name="name"
                            v-validate="'required|max:30'"></text-input>

							<!-- Name -->
                            <text-input :form="form" :label="$t('name')" :v-errors="errors" :value.sync="form.name" counter="30" name="name"
                            v-validate="'required|max:30'"></text-input>

							<v-content>
								<v-container fluid>
									<v-flex xs12 class="text-xs-center text-sm-center text-md-center text-lg-center">
										<img :src="imageUrl" height="150" v-if="imageUrl"/>
										<v-text-field label="Select Image" @click='pickFile' v-model='imageName' prepend-icon='attach_file'></v-text-field>
										<input
											type="file"
											style="display: none"
											ref="image"
											accept="image/*"
											@change="onFilePicked"
										>
									</v-flex>
									<v-dialog v-model="dialog">
										<v-card>
											<v-card-title class="headline">Hello World!</v-card-title>
											<v-card-text>Image Upload Script in VUE JS
												<hr>Yubaraj Shrestha
												<br>http://yubarajshrestha.com.np/</v-card-text>
											<v-card-actions>
												<v-spacer></v-spacer>
												<v-btn color="green darken-1" flat="flat" @click.native="dialog = false">Close</v-btn>
											</v-card-actions>
										</v-card>
									</v-dialog>
								</v-container>
							</v-content>

                        </v-card-text>
                        <v-card-actions>
                            <submit-button :flat="true" :form="form" :label="$t('update')"></submit-button>
                        </v-card-actions>
                    </form>
                </v-card>
			</v-card>
		</v-flex>
	</v-layout>
</template>

<script>
	import Profile from '~/pages/settings/profile'
    import Password from '~/pages/settings/password'
    import Form from "vform";
	import { mapGetters } from "vuex";

	export default {
		name: 'settings-view',
		components: {
			'profile-view': Profile,
			'password-view': Password
		},
		data() {
			return {
                busy: false,
                form: new Form({
                    name: "",
                    email: ""
				}),
				imageName: '',
				imageUrl: '',
				imageFile: ''
			}
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
			pickFile () {
				this.$refs.image.click ()
			},
			
		},
		onFilePicked (e) {
				const files = e.target.files
				if(files[0] !== undefined) {
					this.imageName = files[0].name
					if(this.imageName.lastIndexOf('.') <= 0) {
						return
					}
					const fr = new FileReader ()
					fr.readAsDataURL(files[0])
					fr.addEventListener('load', () => {
						this.imageUrl = fr.result
						this.imageFile = files[0] // this is an image file that can be sent to server...
					})
				} else {
					this.imageName = ''
					this.imageFile = ''
					this.imageUrl = ''
				}
			}
	}
</script>