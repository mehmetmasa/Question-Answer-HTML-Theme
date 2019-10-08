<?php include "header.php"; ?>
<div class="container ">
    <div class="row mt-2 mb-2">
        <div class="col-lg-4">
            <div class="nav nav-pills faq-nav" id="faq-tabs" role="tablist" aria-orientation="vertical">
                <a href="#tab1" class="nav-link active" data-toggle="pill" role="tab" aria-controls="tab1" aria-selected="true">
                    <i class="fas fa-comments blue-icon question-menu-icon "></i> Bütün Sorular
                </a>
                <a href="#tab2" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab2" aria-selected="false">
                    <i class="fas fa-bullhorn question-menu-icon blue-icon"></i> Popüler Sorular
                </a>
                <a href="#tab3" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab3" aria-selected="false">
                    <i class="fas fa-check-circle question-menu-icon blue-icon"></i> Son Cevaplanan Sorular
                </a>
                <a href="#tab4" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab4" aria-selected="false">
                   <i class="fas fa-times question-menu-icon blue-icon"> </i> Cevaplanmamış Sorular
                </a>
            </div>
        </div>
        <div class="col-md-8 col-sm-12">
            <div class="col-sm-12 mb-3">
                <select class="form-control col-md-3">
                    <option>Yeni sorular</option>
                    <option>En çok oylananlar</option>
                    <option>En çok cevaplananlar</option>
                    <option>Eski sorular</option>
                </select>
            </div>
            <div class="tab-content" id="faq-tab-content">
                <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">

                    <div class="col-sm-12 mb-3">
                        <div class="card answer-questions" >
                            <div class="card-body">
                                <div class="card-title">
                                    <div class="user-photo" >
                                        <img src="img/user.png" class="user-photo" alt="user-photo">
                                        <i class="fas fa-check fa-2x green-icon answer-questions ml-2 question-status mt-md-4" ></i>
                                    </div>
                                    <div>
                                        <p class="question-title question-text">Soru Başlığı</p>
                                        <p class="asking-the-question">Kullanıcı <span class="message-time"> tarafından 1 gün önce soruldu.</span></p>
                                        <p class="card-text  question-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <div>
                                         <span class="card-text float-left question-text ">
                                             <i class="far fa-eye question-analysis-icons blue-icon"> <span class="question-analysis-icons-color">105</span></i>
                                             <i class="far fa-thumbs-up question-analysis-icons yellow-icon"> <span class="question-analysis-icons-color">15</span></i>
                                             <i class="far fa-comment green-icon"> <span class="question-analysis-icons-color ">5</span></i>
                                         </span>
                                            <span class="card-text float-right question-category">Kategori İsmi</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mb-3">
                        <div class="card ">
                            <div class="card-body">
                                <div class="card-title">
                                    <div class="user-photo" >
                                        <img src="img/user.png" class="user-photo" alt="user-photo">
                                        <i class="fas fa-question fa-2x question-icon ml-2 question-status mt-md-4" ></i>
                                    </div>
                                    <div>
                                        <p class="question-title">Soru Başlığı</p>
                                        <p class="asking-the-question">Kullanıcı <span class="message-time"> tarafından 1 gün önce soruldu.</span></p>
                                        <p class="card-text  question-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <div>
                                         <span class="card-text float-left question-text ">
                                             <i class="far fa-eye question-analysis-icons blue-icon"> <span class="question-analysis-icons-color">105</span></i>
                                             <i class="far fa-thumbs-up question-analysis-icons yellow-icon"> <span class="question-analysis-icons-color">15</span></i>
                                             <i class="far fa-comment green-icon"> <span class="question-analysis-icons-color ">5</span></i>
                                         </span>
                                            <span class="card-text float-right question-category">Kategori İsmi</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mb-3">
                        <img src="https://h.eksiup.com/LDMB3a.png" alt="reklam" class="img-thumbnail" width="100%">
                    </div>
                    <div class="col-sm-12 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <div class="user-photo" >
                                        <img src="img/user.png" class="user-photo" alt="user-photo">
                                        <i class="fas fa-question fa-2x question-icon ml-2 question-status mt-md-4" ></i>
                                    </div>
                                    <div>
                                        <p class="question-title">Soru Başlığı</p>
                                        <p class="asking-the-question">Kullanıcı <span class="message-time"> tarafından 1 gün önce soruldu.</span></p>
                                        <p class="card-text question-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <div>
                                 <span class="card-text float-left question-text ">
                                     <i class="far fa-eye question-analysis-icons blue-icon"> <span class="question-analysis-icons-color">105</span></i>
                                     <i class="far fa-thumbs-up question-analysis-icons yellow-icon"> <span class="question-analysis-icons-color">15</span></i>
                                     <i class="far fa-comment green-icon"> <span class="question-analysis-icons-color ">5</span></i>
                                 </span>
                                            <span class="card-text float-right question-category">Kategori İsmi</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <div class="user-photo" >
                                        <img src="img/user.png" class="user-photo" alt="user-photo">
                                        <i class="fas fa-question fa-2x question-icon ml-2 question-status mt-md-4" ></i>
                                    </div>
                                    <div>
                                        <p class="question-title">Soru Başlığı</p>
                                        <p class="asking-the-question">Kullanıcı <span class="message-time"> tarafından 1 gün önce soruldu.</span></p>
                                        <p class="card-text question-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <div>
                                 <span class="card-text float-left question-text ">
                                     <i class="far fa-eye question-analysis-icons blue-icon"> <span class="question-analysis-icons-color">105</span></i>
                                     <i class="far fa-thumbs-up question-analysis-icons yellow-icon"> <span class="question-analysis-icons-color">15</span></i>
                                     <i class="far fa-comment green-icon"> <span class="question-analysis-icons-color ">5</span></i>
                                 </span>
                                            <span class="card-text float-right question-category">Kategori İsmi</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab2" role="tabpanel" aria-labelledby="tab2">
                    <div class="accordion" id="accordion-tab-2">
                        <div class="col-sm-12 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="user-photo" >
                                            <img src="img/user.png" class="user-photo" alt="user-photo">
                                            <i class="fas fa-question fa-2x question-icon ml-2 question-status mt-md-4" ></i>
                                        </div>
                                        <div>
                                            <p class="question-title">Soru Başlığı</p>
                                            <p class="asking-the-question">Kullanıcı <span class="message-time"> tarafından 1 gün önce soruldu.</span></p>
                                            <p class="card-text  question-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <div>
                                         <span class="card-text float-left question-text ">
                                             <i class="far fa-eye question-analysis-icons blue-icon"> <span class="question-analysis-icons-color">105</span></i>
                                             <i class="far fa-thumbs-up question-analysis-icons yellow-icon"> <span class="question-analysis-icons-color">15</span></i>
                                             <i class="far fa-comment green-icon"> <span class="question-analysis-icons-color ">5</span></i>
                                         </span>
                                                <span class="card-text float-right question-category">Kategori İsmi</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <div class="card answer-questions" >
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="user-photo" >
                                            <img src="img/user.png" class="user-photo" alt="user-photo">
                                            <i class="fas fa-check fa-2x green-icon answer-questions ml-2 question-status mt-md-4" ></i>
                                        </div>
                                        <div>
                                            <p class="question-title">Soru Başlığı</p>
                                            <p class="asking-the-question">Kullanıcı <span class="message-time"> tarafından 1 gün önce soruldu.</span></p>
                                            <p class="card-text  question-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <div>
                                         <span class="card-text float-left question-text ">
                                             <i class="far fa-eye question-analysis-icons blue-icon"> <span class="question-analysis-icons-color">105</span></i>
                                             <i class="far fa-thumbs-up question-analysis-icons yellow-icon"> <span class="question-analysis-icons-color">15</span></i>
                                             <i class="far fa-comment green-icon"> <span class="question-analysis-icons-color ">5</span></i>
                                         </span>
                                                <span class="card-text float-right question-category">Kategori İsmi</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <img src="https://h.eksiup.com/LDMB3a.png" alt="reklam" class="img-thumbnail" width="100%">
                        </div>
                        <div class="col-sm-12 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="user-photo" >
                                            <img src="img/user.png" class="user-photo" alt="user-photo">
                                            <i class="fas fa-question fa-2x question-icon ml-2 question-status mt-md-4" ></i>
                                        </div>
                                        <div>
                                            <p class="question-title">Soru Başlığı</p>
                                            <p class="asking-the-question">Kullanıcı <span class="message-time"> tarafından 1 gün önce soruldu.</span></p>
                                            <p class="card-text question-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <div>
                                 <span class="card-text float-left question-text ">
                                     <i class="far fa-eye question-analysis-icons blue-icon"> <span class="question-analysis-icons-color">105</span></i>
                                     <i class="far fa-thumbs-up question-analysis-icons yellow-icon"> <span class="question-analysis-icons-color">15</span></i>
                                     <i class="far fa-comment green-icon"> <span class="question-analysis-icons-color ">5</span></i>
                                 </span>
                                                <span class="card-text float-right question-category">Kategori İsmi</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="user-photo" >
                                            <img src="img/user.png" class="user-photo" alt="user-photo">
                                            <i class="fas fa-question fa-2x question-icon ml-2 question-status mt-md-4" ></i>
                                        </div>
                                        <div>
                                            <p class="question-title">Soru Başlığı</p>
                                            <p class="asking-the-question">Kullanıcı <span class="message-time"> tarafından 1 gün önce soruldu.</span></p>
                                            <p class="card-text question-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <div>
                                 <span class="card-text float-left question-text ">
                                     <i class="far fa-eye question-analysis-icons blue-icon"> <span class="question-analysis-icons-color">105</span></i>
                                     <i class="far fa-thumbs-up question-analysis-icons yellow-icon"> <span class="question-analysis-icons-color">15</span></i>
                                     <i class="far fa-comment green-icon"> <span class="question-analysis-icons-color ">5</span></i>
                                 </span>
                                                <span class="card-text float-right question-category">Kategori İsmi</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab3" role="tabpanel" aria-labelledby="tab3">
                    <div class="accordion" id="accordion-tab-3">
                        <div class="col-sm-12 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="user-photo" >
                                            <img src="img/user.png" class="user-photo" alt="user-photo">
                                            <i class="fas fa-question fa-2x question-icon ml-2 question-status mt-md-4" ></i>
                                        </div>
                                        <div>
                                            <p class="question-title">Soru Başlığı</p>
                                            <p class="asking-the-question">Kullanıcı <span class="message-time"> tarafından 1 gün önce soruldu.</span></p>
                                            <p class="card-text  question-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <div>
                                         <span class="card-text float-left question-text ">
                                             <i class="far fa-eye question-analysis-icons blue-icon"> <span class="question-analysis-icons-color">105</span></i>
                                             <i class="far fa-thumbs-up question-analysis-icons yellow-icon"> <span class="question-analysis-icons-color">15</span></i>
                                             <i class="far fa-comment green-icon"> <span class="question-analysis-icons-color ">5</span></i>
                                         </span>
                                                <span class="card-text float-right question-category">Kategori İsmi</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="user-photo" >
                                            <img src="img/user.png" class="user-photo" alt="user-photo">
                                            <i class="fas fa-question fa-2x question-icon ml-2 question-status mt-md-4" ></i>
                                        </div>
                                        <div>
                                            <p class="question-title">Soru Başlığı</p>
                                            <p class="asking-the-question">Kullanıcı <span class="message-time"> tarafından 1 gün önce soruldu.</span></p>
                                            <p class="card-text question-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <div>
                                 <span class="card-text float-left question-text ">
                                     <i class="far fa-eye question-analysis-icons blue-icon"> <span class="question-analysis-icons-color">105</span></i>
                                     <i class="far fa-thumbs-up question-analysis-icons yellow-icon"> <span class="question-analysis-icons-color">15</span></i>
                                     <i class="far fa-comment green-icon"> <span class="question-analysis-icons-color ">5</span></i>
                                 </span>
                                                <span class="card-text float-right question-category">Kategori İsmi</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <img src="https://h.eksiup.com/LDMB3a.png" alt="reklam" class="img-thumbnail" width="100%">
                        </div>
                        <div class="col-sm-12 mb-3">
                            <div class="card answer-questions" >
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="user-photo" >
                                            <img src="img/user.png" class="user-photo" alt="user-photo">
                                            <i class="fas fa-check fa-2x green-icon answer-questions ml-2 question-status mt-md-4" ></i>
                                        </div>
                                        <div>
                                            <p class="question-title">Soru Başlığı</p>
                                            <p class="asking-the-question">Kullanıcı <span class="message-time"> tarafından 1 gün önce soruldu.</span></p>
                                            <p class="card-text  question-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <div>
                                         <span class="card-text float-left question-text ">
                                             <i class="far fa-eye question-analysis-icons blue-icon"> <span class="question-analysis-icons-color">105</span></i>
                                             <i class="far fa-thumbs-up question-analysis-icons yellow-icon"> <span class="question-analysis-icons-color">15</span></i>
                                             <i class="far fa-comment green-icon"> <span class="question-analysis-icons-color ">5</span></i>
                                         </span>
                                                <span class="card-text float-right question-category">Kategori İsmi</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="user-photo" >
                                            <img src="img/user.png" class="user-photo" alt="user-photo">
                                            <i class="fas fa-question fa-2x question-icon ml-2 question-status mt-md-4" ></i>
                                        </div>
                                        <div>
                                            <p class="question-title">Soru Başlığı</p>
                                            <p class="asking-the-question">Kullanıcı <span class="message-time"> tarafından 1 gün önce soruldu.</span></p>
                                            <p class="card-text question-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <div>
                                 <span class="card-text float-left question-text ">
                                     <i class="far fa-eye question-analysis-icons blue-icon"> <span class="question-analysis-icons-color">105</span></i>
                                     <i class="far fa-thumbs-up question-analysis-icons yellow-icon"> <span class="question-analysis-icons-color">15</span></i>
                                     <i class="far fa-comment green-icon"> <span class="question-analysis-icons-color ">5</span></i>
                                 </span>
                                                <span class="card-text float-right question-category">Kategori İsmi</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab4" role="tabpanel" aria-labelledby="tab4">
                    <div class="accordion" id="accordion-tab-4">
                        <div class="col-sm-12 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="user-photo" >
                                            <img src="img/user.png" class="user-photo" alt="user-photo">
                                            <i class="fas fa-question fa-2x question-icon ml-2 question-status mt-md-4" ></i>
                                        </div>
                                        <div>
                                            <p class="question-title">Soru Başlığı</p>
                                            <p class="asking-the-question">Kullanıcı <span class="message-time"> tarafından 1 gün önce soruldu.</span></p>
                                            <p class="card-text question-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <div>
                                 <span class="card-text float-left question-text ">
                                     <i class="far fa-eye question-analysis-icons blue-icon"> <span class="question-analysis-icons-color">105</span></i>
                                     <i class="far fa-thumbs-up question-analysis-icons yellow-icon"> <span class="question-analysis-icons-color">15</span></i>
                                     <i class="far fa-comment green-icon"> <span class="question-analysis-icons-color ">5</span></i>
                                 </span>
                                                <span class="card-text float-right question-category">Kategori İsmi</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="user-photo" >
                                            <img src="img/user.png" class="user-photo" alt="user-photo">
                                            <i class="fas fa-question fa-2x question-icon ml-2 question-status mt-md-4" ></i>
                                        </div>
                                        <div>
                                            <p class="question-title">Soru Başlığı</p>
                                            <p class="asking-the-question">Kullanıcı <span class="message-time"> tarafından 1 gün önce soruldu.</span></p>
                                            <p class="card-text  question-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <div>
                                         <span class="card-text float-left question-text ">
                                             <i class="far fa-eye question-analysis-icons blue-icon"> <span class="question-analysis-icons-color">105</span></i>
                                             <i class="far fa-thumbs-up question-analysis-icons yellow-icon"> <span class="question-analysis-icons-color">15</span></i>
                                             <i class="far fa-comment green-icon"> <span class="question-analysis-icons-color ">5</span></i>
                                         </span>
                                                <span class="card-text float-right question-category">Kategori İsmi</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <img src="https://h.eksiup.com/LDMB3a.png" alt="reklam" class="img-thumbnail" width="100%">
                        </div>
                        <div class="col-sm-12 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="user-photo" >
                                            <img src="img/user.png" class="user-photo" alt="user-photo">
                                            <i class="fas fa-question fa-2x question-icon ml-2 question-status mt-md-4" ></i>
                                        </div>
                                        <div>
                                            <p class="question-title">Soru Başlığı</p>
                                            <p class="asking-the-question">Kullanıcı <span class="message-time"> tarafından 1 gün önce soruldu.</span></p>
                                            <p class="card-text question-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <div>
                                 <span class="card-text float-left question-text ">
                                     <i class="far fa-eye question-analysis-icons blue-icon"> <span class="question-analysis-icons-color">105</span></i>
                                     <i class="far fa-thumbs-up question-analysis-icons yellow-icon"> <span class="question-analysis-icons-color">15</span></i>
                                     <i class="far fa-comment green-icon"> <span class="question-analysis-icons-color ">5</span></i>
                                 </span>
                                                <span class="card-text float-right question-category">Kategori İsmi</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <div class="card answer-questions" >
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="user-photo" >
                                            <img src="img/user.png" class="user-photo" alt="user-photo">
                                            <i class="fas fa-check fa-2x green-icon answer-questions ml-2 question-status mt-md-4" ></i>
                                        </div>
                                        <div>
                                            <p class="question-title">Soru Başlığı</p>
                                            <p class="asking-the-question">Kullanıcı <span class="message-time"> tarafından 1 gün önce soruldu.</span></p>
                                            <p class="card-text  question-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <div>
                                         <span class="card-text float-left question-text ">
                                             <i class="far fa-eye question-analysis-icons blue-icon"> <span class="question-analysis-icons-color">105</span></i>
                                             <i class="far fa-thumbs-up question-analysis-icons yellow-icon"> <span class="question-analysis-icons-color">15</span></i>
                                             <i class="far fa-comment green-icon"> <span class="question-analysis-icons-color ">5</span></i>
                                         </span>
                                                <span class="card-text float-right question-category">Kategori İsmi</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Geri</a>
                    </li>
                    <li class="page-item blue-icon"><a class="page-link" href="#">1</a></li>
                    <li class="page-item blue-icon"><a class="page-link" href="#">2</a></li>
                    <li class="page-item blue-icon"><a class="page-link" href="#">3</a></li>
                    <li class="page-item blue-icon">
                        <a class="page-link" href="#">İleri</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>
