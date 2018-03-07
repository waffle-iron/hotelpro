
$(document).ready(function () {


	if($('#app-search').length){

		const appSearch = new Vue({
		    el: '#app-search',

		    data : {
		    	text : "",
		    	searchInProgress: false,
		    	results : []
		    },


		    	mounted:function () {
		    		alert(1);
		    	},		    

		    methods: {

		    	mounted:function () {
		    		alert(2);
		    	},
		    	clear: function () {
		    		this.text = "";
		    	},
		    	scrollUp: function () {
		    		
		    	},
		    	search: _.debounce(function () {
		    		if (_.size(this.text)) {
		    			this.searchInProgress = true;
		    			axios.get('/terrains').then(function () {			
		    			}, (error) => {this.searchInProgress = false; })
		    		}else{
		    			this.searchInProgress = false;
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
})