<template>
	<div>
		<div class="table-responsive">
	    	<table class="table table-hover table-striped table-bordered text-center">
	            
	            <!-- Header Slot -->
	            <slot name="header">
	            	<thead>
						<tr>
							<th v-if="showSelect">
								<input v-model="selected" type="checkbox">
							</th>
							<th v-for="header in headers" @click="sortBy(header.value)">
								<span>{{ header.text }}</span>
								<span v-if="header.value" :class="sortIcon(header.value)"></span>
							</th>
							<th v-if="!noAction">
								{{ actionText }}
							</th>
						</tr>
					</thead>
	            </slot>
				
	
                <template v-if="draggable">
                	<draggable element="tbody" v-model="items" @change="handleDrag"> 
	                    <slot name="body" :items="items"></slot>

	                    <tr v-if="!array_count(items) && !loading">
	                        <td :colspan="colspan">{{ emptyText }}</td>
	                    </tr>
					</draggable>
                </template>

                <template v-else>
		            <tbody>
			            <slot name="body" :items="items"></slot>
						
			            <!-- Empty list -->
			            <tr v-if="!array_count(items) && !loading">
	                        <td :colspan="colspan">{{ emptyText }}</td>
	                    </tr>
			        </tbody>
                </template>

	        </table>
	    </div>

	    <!-- List Pagination -->
	    <div v-if="array_count(items) && pagination">
		    <div class="row">
		    	<div class="col-12 col-md-6 mb-3">
		    		<div class="d-flex align-items-center form-inline">
		    			<label>Show</label>
			    		<select v-model="limit" class="form-control d-inline-block mx-2">
			    			<option v-for="limit in limits" :value="limit">{{ limit }}</option>
			    		</select>
			    		<label>Entries</label>
		    		</div>
		    	</div>
		    	<div class="col-12 col-md-6 text-sm-left text-md-right">
		    		<pagination
					v-model="page"
					:total-visible="totalVisible"
					:length="pagination.last_page"
					></pagination>
		    	</div>
		    </div>
		    <div class="row">
		    	<div class="col-12 col-md-6 d-flex align-items-center">
		    		<p class="mb-0">Showing {{ pagination.from }} to {{ pagination.to }} of {{ pagination.total }}</p>
		    	</div>
		    	<div class="col-12 col-md-6 text-sm-left text-md-right">
		    		<div v-if="pagination.last_page > 1" class="d-inline-flex form-inline">
		    			<label>Go to Page:</label>
			    		<select v-model="page" class="form-control ml-2">
			    			<option v-for="page_number in pagination.last_page" :value="page_number">{{ page_number }}</option>
			    		</select>
		    		</div>
		    	</div>
		    </div>
	    </div>

	</div>
</template>

<script>
import ListMixin from './mixin.js';

export default {
	methods: {
		handleDrag:function() {
			this.$emit('drag', this.items);
		},
	},

	mounted() {
		if(this.draggable) {
			this.filters['nopagination'] = 1;
		}
	},

	mixins: [ ListMixin ],
}
</script>