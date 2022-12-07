@extends('Layouts.header')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2 ">
                <div class="d-flex flex-column col-12 card p-2 rounded-5">
                    <h2 id="heading">Where should we sent the order?</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora accusamus dicta totam, ipsam,
                        accusantium sapiente harum officia quisquam, ullam velit repellat. Exercitationem quia tenetur
                        officiis ut temporibus alias non odit.</p>
                    <form id="msform" class="m-2">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active" id="account"><strong>Account</strong></li>
                            <li id="personal"><strong>Personal</strong></li>
                            <li id="payment"><strong>Image</strong></li>
                            <li id="confirm"><strong>Finish</strong></li>
                        </ul>
                        <!-- fieldsets -->
                        <fieldset class="">
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Account Information:</h2>
                                    </div>
                                </div>
                                <div class="col-12 d-flex flex-wrap">
                                    <div class="col-6">
                                        <label class="fieldlabels">Email: *</label> <input type="email" name="email"
                                        placeholder="Email Id" />
                                    </div>
                                    <div class="col-6">
                                        <label class="fieldlabels">Email: *</label> <input type="email" name="email"
                                        placeholder="Email Id" />
                                    </div>
                                    <div class="col-6">
                                        <label class="fieldlabels">Email: *</label> <input type="email" name="email"
                                        placeholder="Email Id" />
                                    </div>
                                    <div class="col-6">
                                        <label class="fieldlabels">Email: *</label> <input type="email" name="email"
                                        placeholder="Email Id" />
                                    </div>
                                </div>

                            </div> <input type="button" name="next" class="next action-button btn" value="Next" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Personal Information:</h2>
                                    </div>
                   
                                </div> 
                                <div class="col-12 d-flex flex-wrap">
                                    <div class="col-6">
                                        <label class="fieldlabels">Email: *</label> <input type="email" name="email"
                                        placeholder="Email Id" />
                                    </div>
                                    <div class="col-6">
                                        <label class="fieldlabels">Email: *</label> <input type="email" name="email"
                                        placeholder="Email Id" />
                                    </div>
                                    <div class="col-6">
                                        <label class="fieldlabels">Email: *</label> <input type="email" name="email"
                                        placeholder="Email Id" />
                                    </div>
                                    <div class="col-6">
                                        <label class="fieldlabels">Email: *</label> <input type="email" name="email"
                                        placeholder="Email Id" />
                                    </div>
                                </div>
                            </div> <input type="button" name="next" class="next action-button" value="Next" /> <input
                                type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Personal Information:</h2>
                                    </div>
                   
                                </div> 
                                <div class="col-12 d-flex flex-wrap">
                                    <div class="col-6">
                                        <label class="fieldlabels">Email: *</label> <input type="email" name="email"
                                        placeholder="Email Id" />
                                    </div>
                                    <div class="col-6">
                                        <label class="fieldlabels">Email: *</label> <input type="email" name="email"
                                        placeholder="Email Id" />
                                    </div>
                                    <div class="col-6">
                                        <label class="fieldlabels">Email: *</label> <input type="email" name="email"
                                        placeholder="Email Id" />
                                    </div>
                                    <div class="col-6">
                                        <label class="fieldlabels">Email: *</label> <input type="email" name="email"
                                        placeholder="Email Id" />
                                    </div>
                                </div>
                            </div> <input type="button" name="next" class="next action-button" value="Next" /> <input
                                type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Finish:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 4 - 4</h2>
                                    </div>
                                </div> <br><br>
                                <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                <div class="row justify-content-center">
                                    <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image">
                                    </div>
                                </div> <br><br>
                                <div class="row justify-content-center">
                                    <div class="col-7 text-center">
                                        <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;
            var current = 1;
            var steps = $("fieldset").length;

            setProgressBar(current);

            $(".next").click(function() {

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(++current);
            });

            $(".previous").click(function() {

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(--current);
            });

            function setProgressBar(curStep) {
                var percent = parseFloat(100 / steps) * curStep;
                percent = percent.toFixed();
                $(".progress-bar")
                    .css("width", percent + "%")
            }

            $(".submit").click(function() {
                return false;
            })

        });
    </script>
@endsection
