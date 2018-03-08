
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import VueTooltipster from './components/vue-tooltipster.vue';
Vue.component('example-component', require('./components/ExampleComponent.vue'));

	//const app = new Vue({
	//    el: '#app'
	//});

	if($('#app-search').length){

		const appSearch = new Vue({
		    el: '#app-search',

		    components: {
				VueTooltipster
			},
			
		    data : {
		    	text : "",
		    	searchInProgress: false,
		    	showIfResults: false,
		    	results : [],
		    	filtre: {
		    		q : "Nothings",
		    		prixMin : 0,
			    	prixMax : 0,
			    	nbreEtoile : "",
			    	place : "",
		    	},
		    	_: _,
		    	$: $
		    },


	    	mounted:function () {
	    		

	    		this.searchInProgress = true;
    			axios.get('/api/hotels').then((response) => {
    				this.results = response.data.hotels;
    				console.log(this.results.length);
	    			this.searchInProgress = false;
	    			this.showIfResults = true;
    			}, (error) => {
    				this.searchInProgress = false; 
    				this.showIfResults = false;
    			})	
	    	},		    

	    	watch : {
	    		showIfResults: function () {
	    			if (this.results.length > 0) {
	    				this.showIfResults = true;
	    			} else {
	    				this.showIfResults = false;
	    			}
	    		},
	    		'filtre.prixMin': function () {
	    			if (parseInt(this.filtre.prixMin) > parseInt(this.filtre.prixMax)) {
	    				this.filtre.prixMax = this.filtre.prixMin;
	    				alert()
	    			}
	    		}
	    	},

		    methods: {

		    	clear: function () {
		    		this.text = "";
		    	},

		    	scrollUp: function () {
		    		// body...	
		    	},

		    	search: _.debounce(function () {
		    		var vm = this;
		    		if (_.size(vm.text)) {
		    			vm.filtre.q = vm.text;
		    			vm.searchInProgress = true;
		    			axios.get('/api/hotel', vm.filtre).then(function(response) {			
		    				console.log(response.data);
		    				vm.searchInProgress = false;
		    			}, (error) => {vm.searchInProgress = false; })
		    		}else{
		    			vm.searchInProgress = false;
		    		}
		    	}, 1000),

		    	showOption:function () {
		    		// body...
		    	},

		    	showTooltipster:function () {
		    		// body...
		    	}
		    }
		});

		//console.log(app, appSearch)

	}
