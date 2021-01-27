\<template>
	<div>
		<form @submit.prevent="store">
			<div class="row">

					<div class="form-group col-12 col-md-6">
						<label for="name">Name</label>
						<input required v-model="item['name']" id="name" type="text" class="form-control" name="name">
				  	</div>

				  	<div class="form-group col-12 col-md-6">
						<label for="location">Location</label>
						<input v-model="item['location']" id="location" type="text" class="form-control" name="location">
				  	</div>

				  	<div class="form-group col-12 col-md-6">
						<label for="case">Case</label>
						<input v-model="item['case']" id="case" type="text" class="form-control" name="case">
				  	</div>

				  	<div class="form-group col-12 col-md-6">
						<label for="type">Type</label>
						<input v-model="item['type']" id="type" type="text" class="form-control" name="type">
				  	</div>

				  	<div class="form-group col-12 col-md-6">
						<label for="responder">Responder</label>
						<input v-model="item['responder']" id="responder" type="text" class="form-control" name="responder">
				  	</div>

				  	<div class="form-group col-12 col-md-6">
						<label for="responder_contact">Responder Contact #</label>
						<input v-model="item['responder_contact']" id="responder_contact" type="number" class="form-control" name="responder_contact">
				  	</div>

				  	<div class="form-group col-12 col-md-6">
						<label for="responder_recieved">Responder Received Date/Time</label>
						<input v-model="item['responder_recieved']" id="responder_recieved" type="datetime-local" class="form-control" name="responder_recieved">
				  	</div>

				  	<div class="form-group col-12 col-md-6">
						<label for="status">Status</label>
						<input v-model="item['status']" id="status" type="text" class="form-control" name="status">
				  	</div>

				  	<div class="form-group col-12 col-md-6">
						<label for="alpha">Alpha</label>
						<input v-model="item['alpha']" id="alpha" type="text" class="form-control" name="alpha">
				  	</div>

				  	<div class="form-group col-12 col-md-6">
						<label for="time_of_call">Time of Call</label>
						<input v-model="item['time_of_call']" id="time_of_call" type="time" class="form-control" name="time_of_call">
				  	</div>

				  	<div class="form-group col-12 col-md-6">
						<label for="purpose">Purpose</label>
						<input v-model="item['purpose']" id="purpose" type="text" class="form-control" name="purpose">
				  	</div>

				  	<div class="form-group col-12 col-md-6">
						<label for="age">Age</label>
						<input v-model="item['age']" id="age" type="text" class="form-control" name="age">
				  	</div>

				  	<div class="form-group col-12 col-md-6">
						<label for="number_1085">10-20 (Address)</label>
						<input v-model="item['number_1085']" id="number_1085" type="text" class="form-control" name="number_1085">
				  	</div>

				  	<div class="form-group col-12 col-md-6">
						<label for="area">Area</label>
						<input v-model="item['area']" id="area" type="text" class="form-control" name="area">
				  	</div>

				  	<div class="form-group col-12 col-md-6">
						<label for="refby">Refby</label>
						<input v-model="item['refby']" id="refby" type="text" class="form-control" name="refby">
				  	</div>

				  	<div class="form-group col-12 col-md-6">
						<label for="number_1084">10-25 (Money)</label>
						<input v-model="item['number_1084']" id="number_1084" type="text" class="form-control" name="number_1084">
				  	</div>

				  	<div class="form-group col-12 col-md-6">
						<label for="profile">Profile</label>
						<input v-model="item['profile']" id="profile" type="text" class="form-control" name="profile">
				  	</div>

				  	<div class="form-group col-12 col-md-6">
						<label for="tl">TL</label>
						<input v-model="item['tl']" id="tl" type="text" class="form-control" name="tl">
				  	</div>

				  	<div class="form-group col-12 col-md-6">
						<label for="td_1085">TD 1085</label>
						<input v-model="item['td_1085']" id="td_1085" type="text" class="form-control" name="td_1085">
				  	</div>

				  	<div class="form-group col-12 col-md-6">
						<label for="cc">CC</label>
						<input v-model="item['cc']" id="cc" type="text" class="form-control" name="cc">
				  	</div>

				  	<div class="form-group col-12 col-md-6">
						<label for="tl_1085">TL 1085</label>
						<input v-model="item['tl_1085']" id="tl_1085" type="text" class="form-control" name="tl_1085">
				  	</div>

				  	<div class="form-group col-12 col-md-6">
						<label for="td">TD</label>
						<input v-model="item['td']" id="td" type="text" class="form-control" name="td">
				  	</div>

				  	<div class="form-group col-12 col-md-6">
						<label for="kmr">KMR</label>
						<input v-model="item['kmr']" id="kmr" type="text" class="form-control" name="kmr">
				  	</div>

				  	<div class="form-group col-12 col-md-6">
						<label for="md">MD</label>
						<input v-model="item['md']" id="md" type="text" class="form-control" name="md">
				  	</div>

				  	<div class="form-group col-12 col-md-6">
						<label for="crew">Crew</label>
						<input v-model="item['crew']" id="crew" type="text" class="form-control" name="crew">
				  	</div>

				  	<div class="form-group col-12 col-md-6">
						<label for="rr_nurse">RR Nurse</label>
						<input v-model="item['rr_nurse']" id="rr_nurse" type="text" class="form-control" name="rr_nurse">
				  	</div>

				  	<div class="form-group col-12 col-md-6">
						<label for="rfb_no">PR No.</label>
						<input v-model="item['rfb_no']" id="rfb_no" type="text" class="form-control" name="rfb_no">
				  	</div>

				  	<div class="form-group col-12 col-md-6">
						<label for="76_breakdown">76 Breakdown</label>
						<input v-model="item['76_breakdown']" id="76_breakdown" type="text" class="form-control" name="76_breakdown">
				  	</div>

				  	<div class="form-group col-12 col-md-6">
						<label for="76_tb">76 TBB</label>
						<input v-model="item['76_tb']" id="76_tb" type="text" class="form-control" name="76_tb">
				  	</div>

				  	<div class="form-group col-12 col-md-6">
						<label for="76_secured">76 Secured</label>
						<input v-model="item['76_secured']" id="76_secured" type="text" class="form-control" name="76_secured">
				  	</div>

				  	<div class="form-group col-12 col-md-6">
						<label for="account">Account</label>
						<input v-model="item['account']" id="account" type="text" class="form-control" name="account">
				  	</div>

				  	<div class="col-12 text-right">
				  		<button type="submit" class="btn btn-success">Submit</button>
				  	</div>

			  	<loader :loading="loading"></loader>
			</div>
	  	</form>
	</div>
</template>

<script>

import Loader from '../loaders/Loader.vue';
import ReponseMixin from '../../mixins/response.js';

export default {
	mounted() {
		this.init();
	},

	data() {
		return {
			loading: false,
			item: {},
		}
	},

	methods: {
		store(event) {

			if(this.loading) return;

			let params = new FormData(event.target);

			this.loading = true;

			axios.post(this.submitUrl, params).then(response => {
				this.loading = false;
				this.parseSuccess(response);
				if(this.redirectUrl) {
					window.location.href = this.redirectUrl;
				}
			}).catch(error => {
				this.loading = false;
				this.parseError(error);
			});
		},

		init() {
			if(this.fetchUrl) {
				this.loading = true;
				axios.post(this.fetchUrl).then(response => {
					this.item = response.data.item;
					this.item.responder_recieved = this.item.responder_recieved ? moment(this.item.responder_recieved).format('YYYY-MM-DDTHH:mm') : '';
					this.loading = false;
				}).catch(error => {
					this.loading = false;
				})
			}
		},
	},

	props: {
		submitUrl: String,
		redirectUrl: String,
		fetchUrl: String,
	},

	components: {
		'loader': Loader,
	},

	mixins: [ ReponseMixin ],

}

</script>
