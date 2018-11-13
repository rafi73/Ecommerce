<template>
	<v-layout row>
		<v-flex xs12 sm8 offset-sm2 lg4 offset-lg4>
			<v-card>
				<progress-bar :show="busy"></progress-bar>
				<form @submit.prevent="signin()" @keydown="form.onKeydown($event)">
					<v-card-title primary-title>
						<h3 class="headline mb-0">{{ $t('login') }}</h3>
					</v-card-title>
					<v-card-text>

						<!-- Email -->
						<email-input :form="form" :label="$t('email')" :v-errors="errors" v-model="login.email" :value.sync="form.email" name="email" prepend="person_outline"
						 v-validate="'required|email'"></email-input>

						<!-- Password -->
						<password-input :v-errors="errors" :form="form" :value.sync="form.password" v-model="login.password" prepend="lock_outline" v-validate="'required|min:8'"></password-input>

						<!-- Remember Me -->
						<v-checkbox :label="$t('remember_me')" color="primary" type="checkbox" v-model="remember" value="true"></v-checkbox>

						<submit-button :block="true" :form="form" :label="$t('login')"></submit-button>

					</v-card-text>
					<v-card-actions>
						<router-link :to="{ name: 'register' }">
							{{ $t('register') }}
						</router-link>
						<v-spacer></v-spacer>
						<router-link :to="{ name: 'password.request' }">
							{{ $t('forgot_password') }}
						</router-link>
					</v-card-actions>
				</form>
			</v-card>
		</v-flex>
	</v-layout>
</template>

<script>
	import Form from 'vform'

	export default {
		name: 'login-view',
		metaInfo() {
			return { title: this.$t('login') }
		},
		data: () => ({
			form: new Form({
				email: '',
				password: ''
			}),
			eye: true,
			remember: false,
			busy: false,
			login:{}
		}),

		methods: {
			// async login() {
			// 	if (await this.formHasErrors()) return
			// 	this.busy = true

			// 	// Submit the form.
			// 	const { data } = await this.form.post('/api/login')

			// 	// Save the token.
			// 	this.$store.dispatch('saveToken', {
			// 		token: data.token,
			// 		remember: this.remember
			// 	})

			// 	// Fetch the user.
			// 	await this.$store.dispatch('fetchUser')
			// 	this.busy = falserafi.

			// 	// Redirect home.
			// 	this.$router.push({ name: 'home' })
			// },
			signin() {
				// if (this.formHasErrors()){
				// 	console.log('Error')
				// 	return
				// } 
				this.busy = true
                axios.post('/api/auth/login', this.login)
				.then(
					(response) => {
						console.log(response)
						// Save the token.
						this.$store.dispatch('saveToken', {
							token: response.data.access_token,
							remember: this.remember
						})

						console.log(response.data.access_token)
						localStorage.setItem('token', response.data.access_token);
						axios.defaults.headers.common['Authorization'] = `Bearer ${response.data.access_token}`

						// Fetch the user.
						this.$store.dispatch('fetchUser')
						this.busy = false

						this.$router.push({ name: 'home' })
					}
				)
				.catch(
					(error) => {
						this.busy = false
						console.log(error)
						if(error.response.status == 401){
							alert('Username or Password error!')
						}
					}
				)
            },
		}
	}
</script>