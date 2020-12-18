<!DOCTYPE html>
<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>

<style>
.register{
    /*background: -webkit-linear-gradient(left, #3931af, #00c6ff);*/
    background: -webkit-linear-gradient(left, #096A01, #096A01);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}

</style>

<form action="<?=WEB_ROOT?>accueil/login" method="post">
<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            <h3>Bienvenue</h3>
            <p>YA SALAM Agence de Voyage</p>
            <input type="submit" name="" value="Login"/><br/>
        </div>
        <div class="col-md-9 register-right">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pélérin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Me</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Enrégistrement d'un pelerin</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label> Numéro du compte</label>
                                <input type="text" class="form-control" placeholder="Le numéro du compte sera généré" name="id" value="" disabled/>
                            </div>


                            <div class="form-group">
                                <label> Prénom </label>
                                <input type="text" class="form-control" placeholder="" name="prenom" value="" />
                            </div>
                                    <label> Nom </label>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="" name="nom" value="" />
                            </div>

                            <label>Genre</label>
                                <div class="form-group">
                                <select class="form-control" name="genre">
                                    <option  selected disabled >Please select genre</option>
                                    <option  value="1">M</option>
                                    <option  value="2">F</option>
                                    
                                </select>
                                </div>


                                <label> Date de Naissance</label>
                                <div class="form-group">
                                <input type="date" class="form-control" placeholder="" name="ddn" value="" />
                                </div>
                                
                                <label> Lieu de Naissance</label>
                                <div class="form-group">
                                <input type="text" class="form-control" placeholder="" name="ldn" value="" />
                                </div>

                                <label>Parrain</label>
                                <div class="form-group">
                                <input type="text" class="form-control" placeholder="" name="parrain" value="" />
                                </div>

                                <label>Missionnaire</label>
                                <div class="form-group">
                                <input type="text" class="form-control" placeholder="" name="missionnaire" value=""/>
                                </div>

                                <label>Compagnie</label>
                                <div class="form-group">
                                <select class="form-control"name="compagnie">
                                    <option class="hidden" selected disabled >Please select compagnie</option>
                                    <option  value="1">A</option>
                                    <option  value="2">B</option>
                                    <option  value="3">C</option>
                                </select>
                                </div>

                                <label>Date Aller </label>
                                <div class="form-group">
                                <input type="datetime-local" class="form-control" placeholder="" name="dateAller"  value=""/>
                                </div>

                                <label> Categorie </label>
                                <div class="form-group">
                                <select class="form-control" name="categorie">
                                    <option class="hidden" selected disabled >Please select  	categorie </option>
                                    <option  value="1">A</option>
                                    <option  value="2">B</option>
                                    <option  value="3">C</option>
                                </select>
                                </div>

                                       
                                <label> Destination Aller</label>
                                <div class="form-group">
                                <select class="form-control" name="destinationAller">
                                    <option class="hidden" selected disabled >Please select Destination aller </option>
                                    <option  value="1" >A</option>
                                    <option  value="2">B</option>
                                    <option  value="3">C</option>
                                </select>
                                </div>
                        
                        </div>
                        <div class="col-md-6">

                        <label> Date Retour </label>
                                <div class="form-group">
                                <input type="datetime-local" class="form-control" placeholder="" name="dateRetour"  value=""/>
                                </div>

                            
                        <label> Destination Retour </label>
                                <div class="form-group">
                                <select class="form-control" name="destinationRetour">
                                    <option class="hidden" selected disabled >Please select Destination retour </option>
                                    <option  value="1">A</option>
                                    <option  value="2">B</option>
                                    <option  value="3">C</option>
                                </select>
                                </div>

                                <label> Numéro place Bus  </label>
                                <div class="form-group">
                                <select class="form-control"name="numBus">
                                    <option class="hidden" selected disabled >Please select Numéro place Bus  </option>
                                    <option  value="1">A</option>
                                    <option value="2">B</option>
                                    <option  value="3">C</option>
                                </select>
                                </div>


                                <label>  Bus   </label>
                                <div class="form-group">
                                <select class="form-control" name="bus">
                                    <option class="hidden" selected disabled >Please select  Bus  </option>
                                    <option value="1">A</option>
                                    <option  value="2">B</option>
                                    <option  value="3">C</option>
                                </select>
                                </div>

                                <label> Classe  </label>
                                <div class="form-group">
                                <select class="form-control"name="classe">
                                    <option class="hidden" selected disabled >Please select classe  </option>
                                    <option  value="1">A</option>
                                    <option  value="2">B</option>
                                    <option  value="3">C</option>
                                </select>
                                </div>

                                <label> Hotel Médine </label>
                                <div class="form-group">
                                <select class="form-control" name="hotelMedine">
                                    <option class="hidden" selected disabled >Please select  hotel Medine   </option>
                                    <option  value="1">A</option>
                                    <option  value="2">B</option>
                                    <option  value="3">C</option>
                                </select>
                                </div>

                                <label> Chambre Médine  </label>
                                <div class="form-group">
                                <select class="form-control" name="chambreMedine">
                                    <option class="hidden" selected disabled >Please select chambre Médine  </option>
                                    <option  value="1">A</option>
                                    <option  value="2">B</option>
                                    <option  value="3">C</option>     
                                </select>
                                </div>

                                <label>  Hotel Makkah  </label>
                                <div class="form-group">
                                <select class="form-control" name="hotelMakkah">
                                    <option class="hidden" selected disabled >Please select  hotel Makkah     </option>
                                    <option  value="1">A</option>
                                    <option  value="2">B</option>
                                    <option  value="3">C</option>         
                                </select>
                                </div>



                                <label> Chambre Makkah  </label>
                                <div class="form-group">
                                <select class="form-control" name="chambreMakkah">
                                    <option class="hidden" selected disabled >Please select  chambre Makkah     </option>
                                    <option  value="1">A</option>
                                    <option  value="2">B</option>
                                    <option  value="3">C</option>          
                                </select>
                                </div>

                                <label>Koulou Ziarra Médine</label>
                                <div class="form-group">
                                <input type="datetime-local" class="form-control" placeholder="" name="koulouZiarraMedine" value=""/>
                                </div>

                                <label>Koulou Ziarra Makkah</label>
                                <div class="form-group">
                                <input type="datetime-local" class="form-control" placeholder="" name="koulouZiarraMakkah"  value=""/>
                                </div>

                                <label>Signature</label>
                                <div class="form-group">
                                <input type="text" class="form-control" placeholder="" name="signatures"  value=""/>
                                </div>
                            <input type="submit" class="btnRegister"  value="Register"/>
                        </div>
                    </div>
                </div>
                <!-- <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3  class="register-heading">Apply as a Hirer</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
                            </div>


                        </div> -->
                        <!-- <div class="col-md-6">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
                            </div>
                            <div class="form-group">
                                <select class="form-control">
                                    <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                    <option>What is your Birthdate?</option>
                                    <option>What is Your old Phone Number</option>
                                    <option>What is your Pet Name?</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="`Answer *" value="" />
                            </div> -->
                            <!-- <input type="submit" class="btnRegister"  value="Register"/> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</form>
</body>
</html>





