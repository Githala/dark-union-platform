<? if (!current_user_can('manage_options')) {
     wp_die( __('You do not have permission to access this page'));
  }
 else ?>

<div id="example">
	<dark-union-admin></dark-union-admin>
</div>


<script>
	// define
	var DarkUnionAdmin = Vue.extend({
		template: ``
	});

	// register
	Vue.component('my-component', MyComponent);

	// create a root instance
	new Vue({
		el: '#example'
	});
</script>



<script>
	var DU = {
		editEvent: function(id) {

		}
	}
</script>



