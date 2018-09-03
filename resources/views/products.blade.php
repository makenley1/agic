@extends('layouts/master')

@section('content')

<div class="container-fluid mt-3">
    <div class="row ml-0">
        <div class="col  pr-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="category.html">Category</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sub-category</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-3">
            <div class="card bg-light mb-3">
                <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Categories</div>
                    <div class="form-group">
                        <select class="form-control" id="conditionsselect1">
                          <option>Conditions</option>
                          <option>New</option>
                          <option>Used</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="conditionsselect2">
                          <option>Body</option>
                          <option>Compact</option>
                          <option>Convertible</option>
                          <option>Coupe</option>
                          <option>Off-road</option>
                          <option>Sedan</option>
                        </select>
                     </div>
                    <div class="form-group">
                        <select class="form-control" id="make1">
                          <option>Make</option>
                          <option>Ford</option>
                          <option>Hyundai</option>
                          <option>Kia</option>
                          <option>Honda</option>
                          <option>Skoda</option>
                        </select>
                     </div>
                    <div class="form-group">
                        <select class="form-control" id="make1">
                          <option>Model</option>
                          <option>Accord</option>
                          <option>Camry</option>
                          <option>Civic</option>
                          <option>Rapid</option>
                          <option>Octavia</option>
                        </select>
                     </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white text-uppercase">Last product</div>
                <div class="box7">
                    <img src="http://bestjquery.com/tutorial/hover-effect/demo156/images/img-1.jpg" alt="">
                    <div class="box-content">
                        <h3 class="title">Williamson</h3>
                        <span class="post">Web Developer</span>
                        <ul class="icon">
                            <li><a href="#" class="fa fa-search"></a></li>
                            <li><a href="#" class="fa fa-link"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><a href="{{ ('products/details') }}" title="View Product">Maison 4 pièces </a></h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="row">
                            <div class="col">
                                <p class="btn btn-info">99.00 $</p>
                            </div>
                            <div class="col">
                                <span class="view-count"> 5 <i class="far fa-eye"></i> </span>
                                <span class="like-count"> 5 <i class="far fa-thumbs-up"></i> </span>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
        <div class="col">
            <div class="row">
                <div class="col-md-4 col-sm-6 my-2 mr-2">
                    <div class="box7">
                        <img src="http://bestjquery.com/tutorial/hover-effect/demo156/images/img-1.jpg" alt="">
                        <div class="box-content">
                            <h3 class="title">Williamson</h3>
                            <span class="post">Web Developer</span>
                            <ul class="icon">
                                <li><a href="#" class="fa fa-search"></a></li>
                                <li><a href="#" class="fa fa-link"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><a href="{{ ('products/details') }}" title="View Product">Maison 4 pièces </a></h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="row">
                                <div class="col">
                                    <p class="btn btn-info">99.00 $</p>
                                </div>
                                <div class="col">
                                    <span class="view-count"> 5 <i class="far fa-eye"></i> </span>
                                    <span class="like-count"> 5 <i class="far fa-thumbs-up"></i> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 my-2 mr-2">
                    <div class="box7">
                        <img src="http://bestjquery.com/tutorial/hover-effect/demo156/images/img-1.jpg" alt="">
                        <div class="box-content">
                            <h3 class="title">Williamson</h3>
                            <span class="post">Web Developer</span>
                            <ul class="icon">
                                <li><a href="#" class="fa fa-search"></a></li>
                                <li><a href="#" class="fa fa-link"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><a href="{{ ('products/details') }}" title="View Product">Maison 4 pièces </a></h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="row">
                                <div class="col">
                                    <p class="btn btn-info">99.00 $</p>
                                </div>
                                <div class="col">
                                    <span class="view-count"> 5 <i class="far fa-eye"></i> </span>
                                    <span class="like-count"> 5 <i class="far fa-thumbs-up"></i> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 my-2 mr-2">
                    <div class="box7">
                        <img src="http://bestjquery.com/tutorial/hover-effect/demo156/images/img-3.jpg" alt="">
                        <div class="box-content">
                            <h3 class="title">Kristiana</h3>
                            <span class="post">Web Designer</span>
                            <ul class="icon">
                                <li><a href="#" class="fa fa-search"></a></li>
                                <li><a href="#" class="fa fa-link"></a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><a href="{{ ('products/details') }}" title="View Product">Maison 4 pièces </a></h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="row">
                                <div class="col">
                                    <p class="btn btn-info">99.00 $</p>
                                </div>
                                <div class="col">
                                    <span class="view-count"> 5 <i class="far fa-eye"></i> </span>
                                    <span class="like-count"> 5 <i class="far fa-thumbs-up"></i> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6 my-2 mr-2">
                    <div class="box7">
                        <img src="http://bestjquery.com/tutorial/hover-effect/demo156/images/img-3.jpg" alt="">
                        <div class="box-content">
                            <h3 class="title">Kristiana</h3>
                            <span class="post">Web Designer</span>
                            <ul class="icon">
                                <li><a href="#" class="fa fa-search"></a></li>
                                <li><a href="#" class="fa fa-link"></a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><a href="{{ ('products/details') }}" title="View Product">Maison 4 pièces </a></h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="row">
                                <div class="col">
                                    <p class="btn btn-info">99.00 $</p>
                                </div>
                                <div class="col">
                                    <span class="view-count"> 5 <i class="far fa-eye"></i> </span>
                                    <span class="like-count"> 5 <i class="far fa-thumbs-up"></i> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 my-2 mr-2">
                    <div class="box7">
                        <img src="http://bestjquery.com/tutorial/hover-effect/demo156/images/img-3.jpg" alt="">
                        <div class="box-content">
                            <h3 class="title">Kristiana</h3>
                            <span class="post">Web Designer</span>
                            <ul class="icon">
                                <li><a href="#" class="fa fa-search"></a></li>
                                <li><a href="#" class="fa fa-link"></a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><a href="{{ ('products/details') }}" title="View Product">Maison 4 pièces </a></h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="row">
                                <div class="col">
                                    <p class="btn btn-info">99.00 $</p>
                                </div>
                                <div class="col">
                                    <span class="view-count"> 5 <i class="far fa-eye"></i> </span>
                                    <span class="like-count"> 5 <i class="far fa-thumbs-up"></i> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 my-2 mr-2">
                    <div class="box7">
                        <img src="http://bestjquery.com/tutorial/hover-effect/demo156/images/img-3.jpg" alt="">
                        <div class="box-content">
                            <h3 class="title">Kristiana</h3>
                            <span class="post">Web Designer</span>
                            <ul class="icon">
                                <li><a href="#" class="fa fa-search"></a></li>
                                <li><a href="#" class="fa fa-link"></a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><a href="{{ ('products/details') }}" title="View Product">Maison 4 pièces </a></h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="row">
                                <div class="col">
                                    <p class="btn btn-info">99.00 $</p>
                                </div>
                                <div class="col">
                                    <span class="view-count"> 5 <i class="far fa-eye"></i> </span>
                                    <span class="like-count"> 5 <i class="far fa-thumbs-up"></i> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@stop