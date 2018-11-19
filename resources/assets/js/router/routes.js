export default ({ authGuard, guestGuard }) => [
	{ path: '/', name: 'welcome', component: require('~/pages/welcome.vue') },

	// Authenticated routes.
	...authGuard([
		{
			path: '/home',
			name: 'home',
			component: require('~/pages/home.vue')
		},
		{
			path: '/settings',
			component: require('~/pages/settings/index.vue'),
			children: [
				{
					path: '',
					redirect: {
						name: 'settings.profile'
					}
				},
				{
					path: 'profile',
					name: 'settings.profile',
					component: require('~/pages/settings/profile.vue')
				},
				{
					path: 'password',
					name: 'settings.password',
					component: require('~/pages/settings/password.vue')
				}
			]
		},
		{
			path: '/category',
			redirect: '/category/list',
			component: {
				render(c) { return c('router-view'); }
			},
			children: [
				{
					path: 'form',
					name: 'category.form',
					component: require('~/pages/category/form.vue')
				},
				{
					path: 'list',
					name: 'category.list',
					component: require('~/pages/category/list.vue')
				}
			]
		},
		{
			path: '/sub-category',
			name: 'sub-category',
			component: require('~/pages/subCategory/index.vue')
		},
		{
			path: '/specification',
			name: 'specification',
			component: require('~/pages/specification/index.vue')
		},
		{
			path: '/category-wise-specification',
			name: 'category-wise-specification',
			component: require('~/pages/categoryWiseSpecification/index.vue')
		},
		{
			path: '/brand',
			name: 'brand',
			component: require('~/pages/brand/index.vue')
		},
		{
			path: '/product',
			name: 'product',
			component: require('~/pages/product/index.vue')
		},
		{
			path: '/price-list',
			name: 'price-list',
			component: require('~/pages/priceList/index.vue')
		},
		{
			path: '/orders',
			name: 'orders',
			component: require('~/pages/orders/index.vue')
		},
	]),

	// Guest routes.
	...guestGuard([
		{ path: '/login', name: 'login', component: require('~/pages/auth/login.vue') },
		{ path: '/register', name: 'register', component: require('~/pages/auth/register.vue') },
		{ path: '/password/reset', name: 'password.request', component: require('~/pages/auth/password/email.vue') },
		{ path: '/password/reset/:token', name: 'password.reset', component: require('~/pages/auth/password/reset.vue') },
	]),

	{ path: '*', component: require('~/pages/errors/404.vue') }
]
