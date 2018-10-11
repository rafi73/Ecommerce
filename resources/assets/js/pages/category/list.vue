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

                            <!-- Email -->
                            <email-input :form="form" :label="$t('email')" :v-errors="errors" :value.sync="form.email" name="email" v-validate="'required|email'"></email-input>

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
                })
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
			}
		}
	}
</script>