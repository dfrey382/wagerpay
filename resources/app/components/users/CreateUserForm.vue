<template>
	<div class="main">
		<div class="row">
			<div class="col-md-6">
				<div class="content-box">
					<div class="content-box-header">
						<div class="box-title">Create New User</div>
						<div class="box-description">This is a form to create new user</a></div>
					</div>
					<form>
						<div class="form-group">
							<label for=""> Name</label>
							<input class="form-control" v-model="form.name" placeholder="Enter Name" type="email">
							<ul class="error-messages">
								<li v-for="message in errorMessages.name">{{ message }}</li>
							</ul>
						</div>
						<div class="form-group">
							<label for=""> Email address</label>
							<input class="form-control" v-model="form.email" placeholder="Enter Email" type="email">
							<ul class="error-messages">
								<li v-for="message in errorMessages.email">{{ message }}</li>
							</ul>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label for=""> Password</label>
									<input class="form-control" v-model="form.password" placeholder="Password" type="password">
									<ul class="error-messages">
										<li v-for="message in errorMessages.password">{{ message }}</li>
									</ul>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="">Confirm Password</label>
									<input class="form-control" v-model="form.password_confirmation" placeholder="Confirm Password" type="password">
									<ul class="error-messages">
										<li v-for="message in errorMessages.password_confirmation">{{ message }}</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for=""> Group</label>
							<select class="form-control" v-model="form.group_id">
								<option :value="group.id" v-for="group in groups">{{ group.group_name }}</option>
							</select>
							<ul class="error-messages">
								<li v-for="message in errorMessages.group_id">{{ message }}</li>
							</ul>
						</div>
					</form>
					<div class="content-box-footer text-right">
						<router-link tag="button" :to="{ name: 'users' }">
							<button type="button" class="btn btn-default">Cancel</button>
						</router-link>
						<button type="button" class="btn btn-primary" @click="createUser" :disabled="btnAction != 'Save' ? true : false">{{ btnAction }}</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	import group from '../../api/group'
	import user from '../../api/user'

	export default {
		data() {
			return {
				groups: [],
				form: {
					name: '',
					email: '',
					password: '',
					password_confirmation: '',
					group_id: ''
				},
				btnAction: 'Save',
				errorMessages: []
			}
		},
		methods: {
			getAllGroups() {
				var self = this
				group.getAllGroups(data => {
					self.groups = data
				}, err => {
					console.log(err)
				})
			},
			createUser() {
				var self = this
				self.btnAction = 'Saving, please wait...'

				user.createUser(self.form, data => {
					this.$router.push({
						name: 'users'
					})
				}, err => {
					self.errorMessages = err
                   	self.btnAction = 'Save'
				})
			}
		},
		mounted() {
			this.getAllGroups()
		}
    }
</script>