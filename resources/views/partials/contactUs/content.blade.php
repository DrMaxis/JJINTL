         <!-- Contact Email Area Start -->
         <div class="contact-email-area ">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="mb-5">Contact Us</h3>
                        <p class="text-capitalize mb-40">If You have any comments or questions. Feel free to send us a email below.</p>
                        <div class="row">
                            <form id="review-form" class="registerForm" action="{{route('submit-contact')}}" method="POST">
                                @csrf
                                <div class="fieldset">
                                  <label for="name" class="image-replace username">Name</label>
                                  <input
                                    id="name"
                                    type="text"
                                    class="full-width has-padding has-border"
                                    
                                    placeholder="Name"
                                    name="name"
                                    required
                                    autofocus
                                  >
                                </div>
                                
                                  <div class="fieldset">
                                  <label for="name" class="image-replace username">Email</label>
                                  <input
                                    id="email"
                                    type="email"
                                    class="full-width has-padding has-border"
                                   
                                    placeholder="Email"
                                    name="email"
                                    required
                                    autofocus
                                  >
                                </div>
                                <div class="fieldset">
                                    <label for="comapany" class="image-replace username">Company</label>
                                    <input
                                      id="company"
                                      type="text"
                                      class="full-width has-padding has-border"
                                      placeholder="Company"
                                      name="company"
                                      required
                                      autofocus
                                    >
                                  </div>
                                  <div class="fieldset">
                                    <label for="subject" class="image-replace username">Subject</label>
                                    <input
                                      id="subject"
                                      type="text"
                                      class="full-width has-padding has-border"
                                      v-model="formData.title"
                                      placeholder="Subject"
                                      name="subject"
                                      required
                                      autofocus
                                    >
                                  </div>
                               <div class="fieldset">
                                  <label for="message" class="image-replace">Description</label>
                                  <textarea
                                  name="message"
                                    class="form-control"
                                    rows="5"
                                    id="message"
                                    required
                                  ></textarea>
                                  <div class="help-block">
                                    <span class="text-danger">Note:</span> HTML is not translated!
                                  </div>
                                </div>
                                <div class="pull-right">
                                  <button id="review-submit" class="rgb-wta customer-btn">Continue</button>
                                </div>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Email Area End -->