<template>
	<div class="main">
		<div class="chat-wrapper">
			<div class="panel">
				<div class="chat-contact">
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#friends" role="tab"><i class="fa fa-envelope-open-o"></i> Fiends</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#family" role="tab"><i class="fa fa-user-o"></i> Family</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#foes" role="tab"><i class="fa fa-star-o"></i> Foes</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="friends" role="tabpanel">
							<div class="contact-search">
								<input type="text" placeholder="Search user by name...">
								<button type="button"><i class="fa fa-search"></i></button>
							</div>
							<div class="contact-list">
								<div class="user active">
									<div class="user-image">
										<div class="user-on"></div>
										<img alt="Platinum - Laravel & Vuejs SPA Admin Starter" src="/images/profile.jpg">
									</div>
									<div class="clear">
										<div class="user-name">John Doe</div>
										<div class="last-message"> It was popularised in...</div>
									</div>
									<div class="last-message-time">12 min</div>
								</div>
								<div class="user">
									<div class="user-image">
										<div class="user-on"></div>
										<img alt="Platinum - Laravel & Vuejs SPA Admin Starter" src="/images/profile-woman.jpg">
									</div>
									<div class="clear">
										<div class="user-name">Savanna Odelia</div>
										<div class="last-message">Lorem Ipsum is si...</div>
									</div>
									<div class="last-message-time">1 min</div>
								</div>
								<div class="user">
									<div class="user-image">
										<div class="user-on"></div>
										<img alt="Platinum - Laravel & Vuejs SPA Admin Starter" src="/images/profile.jpg">
									</div>
									<div class="clear">
										<div class="user-name">John Doe</div>
										<div class="last-message"> It was popularised in...</div>
									</div>
									<div class="last-message-time">3 min</div>
								</div>
								<div class="user">
									<div class="user-image">
										<div class="user-on"></div>
										<img alt="Platinum - Laravel & Vuejs SPA Admin Starter" src="/images/profile-woman.jpg">
									</div>
									<div class="clear">
										<div class="user-name">Savanna Odelia</div>
										<div class="last-message">Lorem Ipsum is si...</div>
									</div>
									<div class="last-message-time">6 min</div>
								</div>
								<div class="user">
									<div class="user-image">
										<div class="user-on"></div>
										<img alt="Platinum - Laravel & Vuejs SPA Admin Starter" src="/images/profile.jpg">
									</div>
									<div class="clear">
										<div class="user-name">John Doe</div>
										<div class="last-message"> It was popularised in...</div>
									</div>
									<div class="last-message-time">43 min</div>
								</div>
								<div class="user">
									<div class="user-image">
										<div class="user-on"></div>
										<img alt="Platinum - Laravel & Vuejs SPA Admin Starter" src="/images/profile-woman.jpg">
									</div>
									<div class="clear">
										<div class="user-name">Savanna Odelia</div>
										<div class="last-message">Lorem Ipsum is si...</div>
									</div>
									<div class="last-message-time">21 min</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="family" role="tabpanel">
							<div class="contact-search">
								<input type="text" placeholder="Search user by name...">
								<button type="button"><i class="fa fa-search"></i></button>
							</div>
							<div class="contact-list">
								<div class="user">
									<div class="user-image">
										<div class="user-on"></div>
										<img alt="Platinum - Laravel & Vuejs SPA Admin Starter" src="/images/profile.jpg">
									</div>
									<div class="clear">
										<div class="user-name">John Doe</div>
										<div class="last-message"> It was popularised in...</div>
									</div>
									<div class="last-message-time">8 min</div>
								</div>
								<div class="user">
									<div class="user-image">
										<div class="user-on"></div>
										<img alt="Platinum - Laravel & Vuejs SPA Admin Starter" src="/images/profile-woman.jpg">
									</div>
									<div class="clear">
										<div class="user-name">Savanna Odelia</div>
										<div class="last-message">Lorem Ipsum is si...</div>
									</div>
									<div class="last-message-time">32 min</div>
								</div>
								<div class="user active">
									<div class="user-image">
										<div class="user-on"></div>
										<img alt="Platinum - Laravel & Vuejs SPA Admin Starter" src="/images/profile.jpg">
									</div>
									<div class="clear">
										<div class="user-name">John Doe</div>
										<div class="last-message"> It was popularised in...</div>
									</div>
									<div class="last-message-time">1 min</div>
								</div>
								<div class="user">
									<div class="user-image">
										<div class="user-on"></div>
										<img alt="Platinum - Laravel & Vuejs SPA Admin Starter" src="/images/profile-woman.jpg">
									</div>
									<div class="clear">
										<div class="user-name">Savanna Odelia</div>
										<div class="last-message">Lorem Ipsum is si...</div>
									</div>
									<div class="last-message-time">40 min</div>
								</div>
								<div class="user">
									<div class="user-image">
										<div class="user-on"></div>
										<img alt="Platinum - Laravel & Vuejs SPA Admin Starter" src="/images/profile.jpg">
									</div>
									<div class="clear">
										<div class="user-name">John Doe</div>
										<div class="last-message"> It was popularised in...</div>
									</div>
									<div class="last-message-time">21 min</div>
								</div>
								<div class="user">
									<div class="user-image">
										<div class="user-on"></div>
										<img alt="Platinum - Laravel & Vuejs SPA Admin Starter" src="/images/profile-woman.jpg">
									</div>
									<div class="clear">
										<div class="user-name">Savanna Odelia</div>
										<div class="last-message">Lorem Ipsum is si...</div>
									</div>
									<div class="last-message-time">18 min</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="foes" role="tabpanel">
							<div class="contact-search">
								<input type="text" placeholder="Search user by name...">
								<button type="button"><i class="fa fa-search"></i></button>
							</div>
							<div class="contact-list">
								<div class="user">
									<div class="user-image">
										<div class="user-on"></div>
										<img alt="Platinum - Laravel & Vuejs SPA Admin Starter" src="/images/profile.jpg">
									</div>
									<div class="clear">
										<div class="user-name">John Doe</div>
										<div class="last-message"> It was popularised in...</div>
									</div>
									<div class="last-message-time">1 min</div>
								</div>
								<div class="user">
									<div class="user-image">
										<div class="user-on"></div>
										<img alt="Platinum - Laravel & Vuejs SPA Admin Starter" src="/images/profile-woman.jpg">
									</div>
									<div class="clear">
										<div class="user-name">Savanna Odelia</div>
										<div class="last-message">Lorem Ipsum is si...</div>
									</div>
									<div class="last-message-time">4 min</div>
								</div>
								<div class="user">
									<div class="user-image">
										<div class="user-on"></div>
										<img alt="Platinum - Laravel & Vuejs SPA Admin Starter" src="/images/profile.jpg">
									</div>
									<div class="clear">
										<div class="user-name">John Doe</div>
										<div class="last-message"> It was popularised in...</div>
									</div>
									<div class="last-message-time">9 min</div>
								</div>
								<div class="user">
									<div class="user-image">
										<div class="user-on"></div>
										<img alt="Platinum - Laravel & Vuejs SPA Admin Starter" src="/images/profile-woman.jpg">
									</div>
									<div class="clear">
										<div class="user-name">Savanna Odelia</div>
										<div class="last-message">Lorem Ipsum is si...</div>
									</div>
									<div class="last-message-time">32 min</div>
								</div>
								<div class="user active">
									<div class="user-image">
										<div class="user-on"></div>
										<img alt="Platinum - Laravel & Vuejs SPA Admin Starter" src="/images/profile.jpg">
									</div>
									<div class="clear">
										<div class="user-name">John Doe</div>
										<div class="last-message"> It was popularised in...</div>
									</div>
									<div class="last-message-time">57 min</div>
								</div>
								<div class="user">
									<div class="user-image">
										<div class="user-on"></div>
										<img alt="Platinum - Laravel & Vuejs SPA Admin Starter" src="/images/profile-woman.jpg">
									</div>
									<div class="clear">
										<div class="user-name">Savanna Odelia</div>
										<div class="last-message">Lorem Ipsum is si...</div>
									</div>
									<div class="last-message-time">1 min</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="chat-content">
					<div class="active-user">To : <a href="">John Doe</a></div>
					<div class="chat-list">
						<div class="message">
							<div class="message-content">
								<div class="user-image">
									<img alt="Platinum - Laravel & Vuejs SPA Admin Starter" src="/images/profile.jpg">
								</div>
								<div class="clear">
									<div class="message-time"><i class="fa fa-clock-o"></i> Today 4:43 PM</div>
									<div class="message-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
								</div>
							</div>
						</div>
						<div class="message">
							<div class="message-content">
								<div class="clear">
									<div class="message-time"><i class="fa fa-clock-o"></i> Today 4:43 PM</div>
									<div class="message-text">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
								</div>
								<div class="user-image">
									<img alt="Platinum - Laravel & Vuejs SPA Admin Starter" src="/images/profile-woman.jpg">
								</div>
							</div>
						</div>
						<div class="message-date">
							<span>Yesterday</span>
						</div>
						<div class="message">
							<div class="message-content">
								<div class="user-image">
									<img alt="Platinum - Laravel & Vuejs SPA Admin Starter" src="/images/profile.jpg">
								</div>
								<div class="clear">
									<div class="message-time"><i class="fa fa-clock-o"></i> Today 4:43 PM</div>
									<div class="message-text">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
								</div>
							</div>
						</div>
						<div class="message">
							<div class="message-content">
								<div class="clear">
									<div class="message-time"><i class="fa fa-clock-o"></i> Today 4:43 PM</div>
									<div class="message-text">It was popularised in the 1960s.</div>
								</div>
								<div class="user-image">
									<img alt="Platinum - Laravel & Vuejs SPA Admin Starter" src="/images/profile-woman.jpg">
								</div>
							</div>
						</div>
						<div class="message">
							<div class="message-content">
								<div class="user-image">
									<img alt="Platinum - Laravel & Vuejs SPA Admin Starter" src="/images/profile.jpg">
								</div>
								<div class="clear">
									<div class="message-time"><i class="fa fa-clock-o"></i> Today 4:43 PM</div>
									<div class="message-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
								</div>
							</div>
						</div>
					</div>
					<div class="chat-input">
						<div class="chat-menu">
							<i class="fa fa-plus"></i>
							<div class="menu-list">
								<a href=""><i class="fa fa-video-camera"></i></a>
								<a href=""><i class="fa fa-image"></i></a>
								<a href=""><i class="fa fa-paperclip"></i></a>
							</div>
						</div>
						<textarea placeholder="Type your message here..."></textarea>
					</div>
				</div>
				<div class="chat-detail">
					<div class="user-detail">
						<img alt="Platinum - Laravel & Vuejs SPA Admin Starter" src="/images/profile.jpg">
						<div class="user-name">John Doe</div>
						<div class="user-city">New York City</div>
						<div class="user-social">
							<i class="fa fa-facebook"></i>
							<i class="fa fa-twitter"></i>
						</div>
					</div>
					<div class="chat-document">
						<div class="title"><i class="fa fa-paperclip"></i> Shared Documents</div>
						<ul class="document-list">
							<li><a href="">Last Invoice.pdf</a></li>
							<li><a href="">Research Report.xls</a></li>
							<li><a href="">Missing File.doc</a></li>
						</ul>
					</div>
					<div class="chat-image">
						<div class="title"><i class="fa fa-image"></i> Shared Images</div>
						<div class="image-list">
							<div class="image-thumbnail">
								<img alt="Platinum - Laravel & Vuejs SPA Admin Starter" src="/images/asparagus.jpg">
							</div>
							<div class="image-thumbnail">
								<img alt="Platinum - Laravel & Vuejs SPA Admin Starter" src="/images/chocolate.jpg">
							</div>
							<div class="image-thumbnail">
								<img alt="Platinum - Laravel & Vuejs SPA Admin Starter" src="/images/bulldozer.jpg">
							</div>
							<div class="image-thumbnail">
								<img alt="Platinum - Laravel & Vuejs SPA Admin Starter" src="/images/belts.jpg">
							</div>
							<div class="image-thumbnail">
								<img alt="Platinum - Laravel & Vuejs SPA Admin Starter" src="/images/bulldozer.jpg">
							</div>
							<div class="image-thumbnail">
								<img alt="Platinum - Laravel & Vuejs SPA Admin Starter" src="/images/belts.jpg">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		methods: {
			initChat() {
				$('.chat-list').slimScroll({
					color: 'rgb(142, 142, 142)',
					height: 650
				})
			}
		},
		mounted() {
			this.initChat()
		}
    }
</script>