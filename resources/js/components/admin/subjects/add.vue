<template>
<div>
	<div class="card p-4">
		<div class="form-group">
			<div>
				<h3>
					Add Subject
				</h3>
			</div>
			<div>
				<input type="text" class="form-control w-50" v-model="input.add.title">
			</div>
			<div class="mt-2">
				<input type="file"
       				id="avatar" 
       				name="avatar"
       				accept="image/png, image/jpeg" 
       				@change="setUploadedImage"
   				>
			</div>
			<div class="mt-2">
				<button class="btn btn-success" @click="addSubject">
					Save
				</button>
			</div>
		</div>
	</div>
	<div class="p-4 card">
		<table class="table">
			<thead>
				<tr>
				  <th scope="col">#</th>
				  <th scope="col">Title</th>
				  <th scope="col">Image</th>
				  <th scope="col"></th>
				</tr>
			</thead>
			<tbody>
				<tr v-for="(cat ,index) in category">
				  <th scope="row">
				  	{{ index+1 }}
				  </th>
				  <td>
				  	<input :value="cat.title" class="w-50 form-control" @input="saveOnInput($event ,cat.id)" :placeholder="cat.title">
				  </td>
				  <td>
				  	<img height="50" :src="cat.icons" alt="image">
				  </td>
				  <td>
				  	<button class="btn btn-danger" @click="deleteSubject(index, cat.id)">
				  		<i class="fa fa-trash"></i>
				  	</button>
				  </td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
</template>
<script>
export default{
	props:['categories'],
	data(){
		return {
			category:this.categories,
			image:'',
			input:{
				add:{
					title:'',
					image_url:'',
				},
			},
		}
	},
	methods:{
		setUploadedImage(event){
			const file = event.srcElement.files[0];
		  	if (file) {
		  		let reader = new FileReader()
			    reader.readAsDataURL(file)
			    reader.onload = ()=> {
			       this.input.add.image_url = reader.result
		     	}
		  	}
		},
		addSubject(){
			axios.post('/admin/add/subjects',{
				title:this.input.add.title,
				image:this.input.add.image_url,
			}).then((response)=>{
				this.category.push({
					title:response.data.title,
					icons:response.data.icons,
				})
			})
			this.image = ''
			this.input={
				add:{
					title:'',
					image_url:''
				}
			}
		},
		saveOnInput(event, category_id){
			axios.post('/admin/edit/subjects',{
				category_id:category_id,
				title:event.srcElement.value,
			})
		},
		deleteSubject(index, category_id){
			if(confirm('Are you sure?')){
				axios.post('/admin/delete/subjects',{
					category_id:category_id,
				}).then(()=>{
					this.categories.splice(index ,1)
				})
			}
		},
	},
};
</script>