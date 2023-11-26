@extends('layout.dashboard')
@section('stats')

<div class="content">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h5 class="title">Edit Profile</h5>
          </div>
          <div class="card-body">
            <form action="" method="post">
              <div class="row">
                <div class="col-md-5 pr-1">
                  <div class="form-group">
                    <label>Title </label>
                    <input type="text" class="form-control" placeholder="Title" >
                  </div>
                </div>    
              </div>           
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Product Link</label>
                    <input type="text" class="form-control" placeholder="Product Link" >
                  </div>
                </div>
                <div class="col-md-5 pl-2">
                <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label"  for="exampleInputFile">Choose file</label>
                        </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>quntity</label>
                    <input type="text" class="form-control" placeholder="quntity" >
                  </div>
                </div>
                <div class="col-md-4 pr-1">
                  <div class="form-group">
                    <label>Product Weight</label>
                    <input type="text" class="form-control" placeholder="Product Weight" >
                  </div>
                </div>
                <div class="col-md-1 pr-2">
                <div class="form-group">
                <select>
  <option value="option1">KG</option>
  <option value="option2">LB</option>
</select>
</div>
</div>
              </div>
              
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Description</label>
                    <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" ></textarea>
                  </div>
                </div>
              <div>
              <button type="submit">Submit</button>
              </div>
              </div>

            </form>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  <footer class="footer">
    <div class=" container-fluid ">
      <nav>
        <ul>
          <li>
            <a href="https://www.creative-tim.com">
              Creative Tim
            </a>
          </li>
          <li>
            <a href="http://presentation.creative-tim.com">
              About Us
            </a>
          </li>
          <li>
            <a href="http://blog.creative-tim.com">
              Blog
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright" id="copyright">
        &copy; <script>
          document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
        </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
      </div>
    </div>
  </footer>
</div>
@endsection
