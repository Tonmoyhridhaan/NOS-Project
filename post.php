<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <title>NOS | Sell your car</title>
    </head>
    <body class="bg-light">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
                <a class="navbar-brand" href="#">NOS</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>                       
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="login-area mt-5">
                <div class="container">
                    <div class="rowL">
                        <div class="col-md-6 offset-md-3">
                            <form action="postprocess.php" class="bg-white py-5 px-3">
                                <div class="form-group">
                                    <label for="brand">Brand name</label>
                                    <input name="brand" type="text" class="form-control" id="brand"  placeholder="Enter Brand">
                                </div>
                                <div class="form-group">
                                    <label for="make">Made by</label>
                                    <input name="make"type="text" class="form-control" id="make"  placeholder="Enter make">
                                </div>
                                <div class="form-group">
                                    <label for="type">Vehicle Type</label>
                                    <input name="type" type="text" class="form-control" id="type"  placeholder="Enter Type">
                                </div>
                                <div class="form-group">
                                    <label for="color">Color</label>
                                    <input name="color" type="text" class="form-control" id="color"  placeholder="Enter color">
                                </div>
                                <div class="form-group">
                                    <label for="Condition">Select Condition</label>
                                    <select class="form-control" id="Condition" name="condition">
                                    <option>Used</option>
                                    <option>New</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Year">Select Year</label>
                                    <select class="form-control rounded-0"name="year">
                                    <option selected>Select Year</option>
                                    <option>2019<option>
                                    <option>2018<option>
                                    <option>2017<option>
                                    <option>2016<option>
                                    <option>2015<option>
                                    <option>2014<option>
                                    <option>2013<option>
                                    <option>2012<option>
                                    <option>2011<option>
                                    <option>2010<option>
                                    <option>2009<option>
                                    <option>2008<option>
                                    <option>2007<option>
                                    <option>2006<option>
                                    <option>2005<option>
                                    <option>2004<option>
                                    <option>2003<option>
                                    <option>2002<option>
                                    <option>2001<option>
                                    <option>2000<option>
                                    <option>1999<option>
                                    <option>1998<option>
                                    <option>1997<option>
                                    <option>1996<option>
                                    <option>1995<option>
                                    <option>1994<option>
                                    <option>1993<option>
                                    <option>1992<option>
                                    <option>1991<option>
                                    <option>1990<option>
                                    <option>1989<option>
                                    <option>1988<option>
                                    <option>1987<option>
                                    <option>1986<option>
                                    <option>1985<option>
                                    <option>1984<option>
                                    <option>1983<option>
                                    <option>1982<option>
                                    <option>1981<option>
                                    <option>1980<option>
                                    <option>1979<option>
                                    <option>1978<option>
                                    <option>1977<option>
                                    <option>1976<option>
                                    <option>1975<option>
                                    <option>1974<option>
                                    <option>1973<option>
                                    <option>1972<option>
                                    <option>1971<option>
                                    <option>1970<option>
                                    <option>1969<option>
                                    <option>1968<option>
                                    <option>1967<option>
                                    <option>1966<option>
                                    <option>1965<option>
                                    <option>1964<option>
                                    <option>1963<option>
                                    <option>1962<option>
                                    <option>1961<option>
                                    <option>1960<option>
                                    <option>1959<option>
                                    <option>1958<option>
                                    <option>1957<option>
                                    <option>1956<option>
                                    <option>1955<option>
                                    <option>1954<option>
                                    <option>1953<option>
                                    <option>1952<option>
                                    <option>1951<option>
                                    <option>1950<option>   
                            </select>
                        </div>
                        <div class="form-group">
                                <label for="price">Price</label>
                                <input name="price" type="text" class="form-control" id="price"  placeholder="Enter price">
                        </div>
                        <div class="form-group">
                                <label for="img1">Image 1</label>
                                <input name = "img1" type="file" class="form-control-file" id="img1">
                         </div>
                        <div class="form-group">
                                <label for="img2">Image 2</label>
                                 <input name = "img2" type="file" class="form-control-file" id="img2">
                         </div>
                         <div class="form-group">
                                <label for="img3">Image 3</label>
                                <input name = "img3" type="file" class="form-control-file" id="img3">
                         </div>
                         <div class="form-group">
                            <label for="details">Details</label>
                            <textarea name = "details" class="form-control" id="details" rows="8"></textarea>
                        </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Post</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <script src="vendor/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="vendor/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    </body>
</html>