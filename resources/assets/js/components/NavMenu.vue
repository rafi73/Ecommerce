<template>
	<div>
		<v-toolbar flat>
			<v-list>
				<v-list-tile>
					<v-list-tile-title class="title">
						{{ name }}
					</v-list-tile-title>
				</v-list-tile>
			</v-list>
		</v-toolbar>
		<v-divider></v-divider>
		<v-list>
			<v-list-tile value="true" v-for="(item, i) in items" :key="i" :to="item.route">
				<v-list-tile-action>
					<v-icon light v-html="item.icon"></v-icon>
				</v-list-tile-action>
				<v-list-tile-content>
					<v-list-tile-title v-text="item.title"></v-list-tile-title>
				</v-list-tile-content>
			</v-list-tile>
		</v-list>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				name: this.$t('nav_menu_title'),
				items: [
					{ 
						title: 'Dashboard', 
						icon: 'dashboard', 
						route: { 
							name: 'home' 
						} 
					},
					{ 
						title: 'Account', 
						icon: 'account_box', 
						route: { 
							name: 'settings.profile' 
						} 
					},
					{ 
						title: 'Category', 
						icon: 'category', 
						route: { 
							path: '/category' 
						} 
					},
					{ 
						title: 'Sub Category', 
						icon: 'category', 
						route: { 
							path: '/sub-category' 
						} 
					},
					{ 
						title: 'Specification', 
						icon: 'category', 
						route: { 
							path: '/specification' 
						} 
					},
					{ 
						title: 'Category Wise Specification', 
						icon: 'category', 
						route: { 
							path: '/category-wise-specification' 
						} 
					},
					{ 
						title: 'Brand', 
						icon: 'category', 
						route: { 
							path: '/brand' 
						} 
					},
					{ 
						title: 'Product', 
						icon: 'category', 
						route: { 
							path: '/product' 
						} 
					},
					{ 
						title: 'Specification Details', 
						icon: 'category', 
						route: { 
							path: '/product' 
						} 
					},
				]
			}
		}
	}
</script>