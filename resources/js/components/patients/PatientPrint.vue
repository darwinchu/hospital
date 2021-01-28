<template>
	<div>
			<div class="row">

                <div class="col-12">
                    <div class="row">
                        <div class="col-3 text-right">
                            <img width="50%" src="/images/ronin.png"  >
                        </div>
                        <div class="col-8 text-center">
                            <h3 class="text-gray">Ronin Emergency Medical Services</h3>

                            <p class="text-gray">
                                Block 23 Lot 2 Gabriela St., New Capitol Estates I, Commonwealth, Quezon City.<br>
                                Email: <u>ronin19ems@gmail.com</u> | Contact No: 0282878302<br>
                            </p>

                        </div>
                    </div>
                </div>

				<div class="col-12 col-md-4">
					<div class="row">
						<div class="col-6">
							<ul class="list-unstyled">
								<li><strong>Patient:</strong></li>
								<li><strong>Location:</strong></li>
								<li><strong>Case:</strong></li>
								<li><strong>Type:</strong></li>
							</ul>
						</div>

						<div class="col-6">
							<ul class="list-unstyled">
								<li>{{ item.name }}</li>
								<li>{{ item.location }}</li>
								<li>{{ item.case }}</li>
								<li>{{ item.type }}</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-12 col-md-4">
					<div class="row">
						<div class="col-6">
							<ul class="list-unstyled">
								<li><strong>Reponder:</strong></li>
								<li><strong>Reponder Contact #:</strong></li>
								<li><strong>Responder Receive Date / Time:</strong></li>
							</ul>
						</div>

						<div class="col-6">
							<ul class="list-unstyled">
								<li>{{ item.responder }}</li>
								<li>{{ item.responder_contact }}</li>
								<li>{{ item.responder_recieved }}</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-12 col-md-4">
					<div class="row">
						<div class="col-6">
							<ul class="list-unstyled">
								<li><strong>Status:</strong></li>
								<li><strong>Alpha:</strong></li>
							</ul>
						</div>

						<div class="col-6">
							<ul class="list-unstyled">
								<li>{{ item.status }}</li>
								<li>{{ item.alpha }}</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-12">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<td>TIME OF CALL</td>
								<td>{{ item.time_of_call ? item.time_of_call : '-' }}</td>
							</tr>
							<tr>
								<td>PURPOSE</td>
								<td>{{ item.pupose ? item.pupose : '-' }}</td>
							</tr>
							<tr>
								<td>AGE</td>
								<td>{{ item.age ? item.age : '-' }}</td>
							</tr>
							<tr>
								<td>GENDER</td>
								<td>{{ item.gender ? item.gender : '-' }}</td>
							</tr>
							<tr>
								<td>10-20 (Address)</td>
								<td>{{ item.number_1085 ? item.number_1085 : '-' }}</td>
							</tr>
							<tr>
								<td>AREA</td>
								<td>{{ item.area ? item.area : '-' }}</td>
							</tr>
							<tr>
								<td>REFBY</td>
								<td>{{ item.refby ? item.refby : '-' }}</td>
							</tr>
							<tr>
								<td>10-25 (Money)</td>
								<td>{{ item.number_1084 ? item.number_1084 : '-' }}</td>
							</tr>
							<tr>
								<td>PROFILE</td>
								<td>{{ item.profile ? item.profile : '-' }}</td>
							</tr>
							<tr>
								<td>TL</td>
								<td>{{ item.tl ? item.tl : '-' }}</td>
							</tr>
							<tr>
								<td>TD 10-77</td>
								<td>{{ item.td_1085 ? item.td_1085 : '-' }}</td>
							</tr>
							<tr>
								<td>KMR</td>
								<td>{{ item.kmr ? item.kmr : '-' }}</td>
							</tr>
							<tr>
								<td>CC</td>
								<td>{{ item.cc ? item.cc : '-' }}</td>
							</tr>
							<tr>
								<td>TL 10-77</td>
								<td>{{ item.tl_1085 ? item.tl_1085 : '-' }}</td>
							</tr>
							<tr>
								<td>TD</td>
								<td>{{ item.td ? item.td : '-' }}</td>
							</tr>
							<tr>
								<td>MD</td>
								<td>{{ item.md ? item.md : '-' }}</td>
							</tr>
							<tr>
								<td>CREW</td>
								<td>{{ item.crew ? item.crew : '-' }}</td>
							</tr>
							<tr>
								<td>RR NURSE</td>
								<td>{{ item.rr_nurse ? item.rr_nurse : '-' }}</td>
							</tr>
							<tr>
								<td>PR NO.</td>
								<td>{{ item.rfb_no ? item.rfb_no : '-' }}</td>
							</tr>
							<tr>
								<td>10-25 BREAK DOWN</td>
								<td>{{ item['76_breakdown'] ? item['76_breakdown'] : '-' }}</td>
							</tr>
							<tr>
								<td>10-25 TBB</td>
								<td>{{ item['76_tb'] ? item['76_tb'] : '-' }}</td>
							</tr>
							<tr>
								<td>10-25 SECURED</td>
								<td>{{ item['secured'] ? item['secured'] : '-' }}</td>
							</tr>
							<tr>
								<td>ACCOUNT</td>
								<td>{{ item['account'] ? item['account'] : '-' }}</td>
							</tr>
						</tbody>
					</table>
				</div>

			  	<loader :loading="loading"></loader>

			</div>
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
		fetchUrl: String,
	},

	components: {
		'loader': Loader,
	},

	mixins: [ ReponseMixin ],

}

</script>

<style>

.text-gray {
    color: gray;
}

</style>
