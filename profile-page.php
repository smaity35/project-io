<?php include('header.php');?>

  <section class="profile-header" style="background-image: url('images/img1.jpg')">
    <div class="container">
      <div class="profile-contents">
        <div class="profile-img" style="background-image: url('images/t3.jpg')"></div>
        <div class="content-box">
          <h2>Issa Rae Presents is creating Series, Films, Events</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="about-page-wrap">
      <div class="container">
        <div class="about-top-part">
            <ul class="clearfix">
              <li class="tabs active"><a data-toggle="tab" href="#menu0">Overview</a></li>
              <li class="tabs"><a data-toggle="tab" href="#menu1">Posts</a></li>
             
              <li class="tab-last"><a data-toggle="tab" href="#menu5">Become a patron</a></li>
            </ul>

        </div>
        <div class="tab-content">
          <div id="menu0" class="tab-pane fade in active">
            

            <div class="row">
              <div class="col-md-3">
              </div>
              <div class="col-md-6">
                  <div class="title overview-tile1">
                      <iframe  src="https://www.youtube.com/embed/F4ZRW7scGOE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <p>
                        My most popular web series, The Misadventures of Awkward Black Girl was a HUGE success because of you. I will always and forever be grateful to those who contributed to, watched and shared our series. Because of you, we were one of the first web series of color to launch a successful crowdfunding campaign. 
                      </p>
                      <p>
                        Because of you, we are proud to give writers, directors and producers of color an opportunity to have their work seen by thousands of people through our monthly showcase, #ShortFilmSundays. 
                      </p>
                      <p>
                        Become a <b>patron</b> of Issa Rae Productions today. 
                      </p>
                  </div>

                  <div class="posts-head">
                    <h4>RECENT POSTS BY ISSA RAE PRESENTS</h4>
                  </div>

                  <div class="title overview-tile2">
                    <table>
                        <tr>

                            <td>
                                <i class="material-icons">lock_open</i>
                            </td>

                            <td>
                                <p>
                                  See more today! If you <a href="">become a patron</a> to <b>Issa Rae Presents</b>, you’ll immediately get access to as many as 99 patron-only posts.
                                </p>
                            </td>

                        </tr>
                        
                    </table>
                  </div>
                  <?php
                      for($i=1; $i<=25; $i++){
                  ?>
                  <div class="title overview-tile3">
                     <div class="imag-area" >
                       <a href="" style="background-image: url('images/img3.jpg')">
                         <div>
                           <i class="material-icons">lock</i>
                           <p>Unlock this <br>by becoming a patron</p>
                           <button>Join now for $50 per month</button>
                         </div>
                       </a>
                     </div>
                     <div class="content-area">
                       <div class="date-lock">
                         <span><a href="">Apr 16 at 8:31am</a></span>
                         <div class="lock"><span><i class="material-icons">lock</i> Locked</span>
                          <div class="loc-status">
                           <h4>Who can see this post</h4>
                           <ul>
                             <li>Exclusive IRP Patron</li>
                             <li>Premier IRP Patron</li>
                           </ul>
                         
                         </div>
                         </div class="lock">
                         
                       </div>
                       <div class="post-title">
                         <a href="">Color Creative Masterclass with James Bland: The Giant of Momentum (Episode 4)</a>
                       </div>
                       <div class="class-tag">
                        <a href=""><i class="material-icons">turned_in_not</i>
                         Master Class</a>
                       </div>
                       <div class="comment-like">
                         <div class="comment"><a href="">2 Comments</a></div>
                         <div class="like"><span>6 Likes</span>
                          <div class="cont">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                          </div>
                         </div>
                       </div>
                     </div>
                  </div>
                  <?php } ?>
                  
              </div>
              <div class="col-md-3">
                  <div class="big-btn">
                      <button class="active" disabled>Save Changes</button>
                  </div>
                  <div class="title sec-5">
                      <h6>CHECKLIST</h6>
                      <ul class="list-type-1">
                          <li class="green">
                              <div class="round done"><i class="ion ion-md-checkmark"></i></div>
                              <div class="content">
                                  <p>Upload profile picture</p>
                                  <small>Required <a href="#">add now</a></small>
                              </div>
                          </li>
                          <li class="red">
                              <div class="round"><i class="ion ion-md-checkmark"></i></div>
                              <div class="content">
                                  <p>Upload cover image</p>
                                  <small>Required <a href="#">add now</a></small>
                              </div>
                          </li>
                          <li class="red">
                              <div class="round"><i class="ion ion-md-checkmark"></i></div>
                              <div class="content">
                                  <p>Create about section</p>
                                  <small>Required <a href="#">add now</a></small>
                              </div>
                          </li>
                          <li class="red">
                              <div class="round"><i class="ion ion-md-checkmark"></i></div>
                              <div class="content">
                                  <p>Verify phone number</p>
                                  <small>Required <a href="#">add now</a></small>
                              </div>
                          </li>
                      </ul>
                      <h6>LEARN MORE</h6>
                      <ul class="list-type-2">
                          <li><a href="">Membership 101: Best Practices</a></li>
                          <li><a href="">How to choose your business model</a></li>
                          <li><a href="">How to talk about Patreon to your audience</a></li>
                          <li><a href="">Knowing your worth as a creator</a></li>
                      </ul>
                  </div>
              </div>
            </div>

          </div>
          <div id="menu1" class="tab-pane fade">
            
           
          </div>
       
          
        </div>

          
      </div>
  </section>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="ion ion-md-close"></i></button>
        <h4 class="modal-title">UPGRADE TO PRO</h4>
      </div>
      <div class="modal-body">
        <p>Get all the tools you need to grow your membership business and delight your fans. The cost for Pro is 8% of your Patreon earnings.</p>
        <p>
            Please confirm that you would like to upgrade.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="cancel-btn" data-dismiss="modal">Cancel</button>
        <button type="button" class="extra-btn" >Upgrade to Pro</button>
      </div>
    </div>

  </div>
</div>

<?php include('footer.php');?>


