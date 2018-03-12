
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
Vue.component('pagination', require('laravel-vue-pagination'));
Vue.component('example-component', require('./components/ExampleComponent.vue'));

	//const app = new Vue({
	//    el: '#app'
	//});

$(document).ready(function () {

	//
		if($('#appSearch').length){

			const appSearch = new Vue({
			    el: '#appSearch',

			    components: {
					VueTooltipster
				},
				
			    data () {
			    	return {
					    	text : "",
					    	searchInProgress: false,
					    	showIfResults: false,
					    	results : {},
					    	featureds : {data : []},
					    	filtre: {
					    		q : "Nothings",
					    		prixMin : 0,
						    	prixMax : 0,
						    	nbreEtoile : "",
						    	place : "",
					    	},
					    	lo: _
					    };
			    },

			    created () {


			    },

		    	mounted:function () {


		    		$(this.$refs.nbreEtoile).TouchSpin({
					      min: 1,
					      max: 9,
					      step: 1,
					      decimals: 0,
					      boostat: 5,
					      maxboostedstep: 10,
					      buttondown_class: 'btn btn-white',
					      buttonup_class: 'btn btn-white'
					    });
					 

		    		this.searchInProgress = true;
	    			axios.get('/api/hotels').then((response) => {
	    				this.featureds = response.data.hotels;
	    				console.log(this.featureds);
		    			this.searchInProgress = false;
		    			this.showIfResults = true;
	    			}, (error) => {
	    				this.searchInProgress = false; 
	    				this.showIfResults = false;
	    			})	
		    	},		    

		    	watch : {
		    		
		    	},

			    methods: {

			    	clear: function () {
			    		this.text = "";
			    	},

			    	scrollUp: function () {
			    		// body...	
			    	},

			    	debounce(func, wait, immediate) {
			    		var timeout;
			    		return function() {
			    			var context = this, args = arguments;
			    			clearTimeout(timeout);
			    			timeout = setTimeout(function() {
			    				timeout = null;
			    				if (!immediate) func.apply(context, args);
			    			}, wait);
			    			if (immediate && !timeout) func.apply(context, args);
			    		};
			    	},

			    	search: function () {
			    		var vm = this;
			    		var search = function(vm){
    			    		if (_.size(vm.text)) {
    			    				
    			    			vm.filtre.q = vm.text;
    			    			vm.searchInProgress = true;
    			    			axios.get('/api/hotels', {params : vm.filtre}).then((response) => {
    			    				vm.results = response.data.hotels;
    			    				console.log(vm.results);
    				    			vm.searchInProgress = false;
    				    			vm.showIfResults = true;
    			    			}, (error) => {
    			    				vm.searchInProgress = false; 
    			    				vm.showIfResults = false;
    			    			})	


    			    		}else{
    			    			vm.searchInProgress = false;
    			    			vm.showIfResults = false;

    			    		}
			    		};
			    		this.lo.debounce(search(vm), 1500);
			    		
			    	},

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

})
