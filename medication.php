<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cardiac center</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles_web.css" />
    <link rel="stylesheet" href="styles_med.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="web.html"
          ><img
            src="heart.png"
            width="60"
            height="50"
            class="d-inline-block align-text-center"
          />Cardiac Center</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto my-2 my-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="register.html">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="update.html">Update</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link active dropdown-toggle"
                href="#"
                id="navbarScrollingDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Patient List
              </a>
              <ul
                class="dropdown-menu"
                aria-labelledby="navbarScrollingDropdown"
              >
                <li>
                  <a class="dropdown-item" href="patients.html">Patient List</a>
                </li>

                <li><a class="dropdown-item" href="order.html">Order</a></li>
                <li>
                  <a class="dropdown-item" href="medication.html"
                    >Medication History</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarScrollingDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Profile
              </a>
              <ul
                class="dropdown-menu"
                aria-labelledby="navbarScrollingDropdown"
              >
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Setting</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="sign in.html">Logout</a>
                </li>
              </ul>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>

    <h1 class="center-align">Medication History</h1>
    <p class="card-Name">???????????????????????????????????????</p>
    <div class="row">
      <div class="col-sm-8">
        <div class="card Layout-information">
          <div class="card-body">
            <form class="row gap-3">
              <div class="col-auto">
                <label for="label_HN">????????????????????????????????? :</label>
                <input
                  placeholder="????????????"
                  id="lebel_HN"
                  type="text"
                  v-model="HN"
                />
              </div>
              <div class="row gap-3">
                <div class="col-auto">
                  <label for="label_patientname">????????????????????????????????? :</label>
                  <input
                    placeholder="?????????????????????????????????"
                    id="lebel_patientname"
                    type="text"
                    v-model="patientname"
                  />
                </div>
                <div class="col-sm-6">
                  <label for="label_patientname">?????????????????????????????????????????? :</label>
                  <input
                    placeholder="??????????????????????????????????????????"
                    id="lebel_patientname"
                    type="text"
                    v-model="patientname"
                  />
                </div>
              </div>
              <div class="row gap-3">
                <div class="col-auto">
                  <label for="label_patientname">????????? :</label>
                  <input
                    placeholder="?????????"
                    id="lebel_gender"
                    type="text"
                    v-model="gender"
                  />
                </div>
                <div class="col-auto">
                  <label for="label_date">????????????????????? :</label>
                  <input
                    placeholder="?????????/???????????????/??????"
                    id="lebel_date"
                    type="text"
                    v-model="date"
                  />
                </div>
                <div class="col-auto">
                  <label for="label_age">???????????? :</label>
                  <input
                    placeholder="????????????"
                    id="lebel_age"
                    type="number"
                    v-model="age"
                  />
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card Layout-Addinformation">
          <div class="w3-container">
            <div class="card-body item-center">
                <a href="#" onclick="document.getElementById('id01').style.display='block'"><img src="logo-Meet.png" style="width: 100px" /></a>
                <div id="id01" class="w3-modal">
                  <div
                    class="w3-modal-content w3-card-4 w3-animate-zoom"
                    style="max-width: 600px"
                  >
                    <div class="w3-center">
                      <br />
                      <span
                        onclick="document.getElementById('id01').style.display='none'"
                        class="
                          w3-button w3-xlarge w3-hover-red w3-display-topright
                        "
                        title="Close Modal"
                        >&times;</span
                      >
                      <img
                        src="logo-Meet.png"
                        alt="logo"
                        style="width: 40%"
                        class="w3-circle w3-margin-top"
                      />
                    </div>
                    <form class="w3-container">
                      <div class="w3-section">
                        <label class="w3-margin-bottom"
                          ><b>??????????????????????????????</b></label
                        >
                        <div class="row row-cols-lg-auto input-from">
                            <label class="text">??????????????????</label>
                            <input
                                class="w3-input w3-border w3-margin-bottom sizetext"
                                list="datalistOptions"
                                id="exampleDataList"
                                placeholder="?????????"
                            />
                            <datalist id="datalistOptions">
                                <option value="???????????????????????????"></option>
                                <option value="???????????????????????????"></option>
                                <option value="??????????????????"></option>
                                <option value="?????????????????????????????????"></option>
                                <option value="????????????????????????"></option>
                                <option value="????????????????????????"></option>
                                <option value="??????????????????????????????"></option>
                            </datalist>
                            <label class="text">????????????</label>
                            <input
                                class="w3-input w3-border w3-margin-bottom"
                                type="datetime-local"
                                name="date"
                                required
                            />
                        </div>
                        
                        <button
                          class="
                            w3-button w3-block w3-green w3-section w3-padding
                          "
                          type="submit"
                        >
                          ??????????????????
                        </button>
                      </div>
                    </form>
                    <div
                      class="
                        w3-container input-from  w3-border-top w3-padding-16 w3-light-grey
                      "
                    >
                      <button
                        onclick="document.getElementById('id01').style.display='none'"
                        type="button"
                        class="w3-button w3-red"
                      >
                        Cancel
                      </button>
                    </div>
                  </div>
                </div>
                <p class="card-text">??????????????????????????????</p>
            </div>    
          </div>
        </div>
      </div>
    </div>

    <p class="card-Name">?????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
    <div class="row">
      <div class="col-sm-8">
        <div class="card Layout-table">
          <div class="card-body">
            <h5 class="card-title">
              ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
            </h5>
            <table class="table table-bordered border-dark">
              <thead>
                <tr>
                  <td class="align-middle border-dark">Drug</td>
                  <td class="align-middle border-dark">
                    ????????????????????????????????????????????????????????????????????????
                  </td>
                  <td class="align-middle border-dark">??????????????????????????????????????????</td>
                  <td class="align-middle border-dark">?????????????????????????????????????????????????????????</td>
                  <td class="align-middle border-dark">????????????????????????????????????</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="border-dark">Diuretic</td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                </tr>
                <tr>
                  <td class="border-dark">ACEI/ARB/ARNI</td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                </tr>
                <tr>
                  <td class="border-dark">Bata-Blocker</td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                </tr>
                <tr>
                  <td class="border-dark">SGLT2 i</td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                </tr>
                <tr>
                  <td class="border-dark">Spironolactone</td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                </tr>
                <tr>
                  <td class="border-dark">Digoxin</td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                </tr>
                <tr>
                  <td class="border-dark">Nitrate</td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                </tr>
                <tr>
                  <td class="border-dark">Hydralazine</td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                </tr>
                <tr>
                  <td class="border-dark">Ivabradine</td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                </tr>
                <tr>
                  <td class="border-dark">Lipid lowering agent</td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                </tr>
              </tbody>
            </table>
            <form action="medication-send.php" method="POST">
                <!-- alert -->
                <?php if (isset($_SESSION["success"])) { ?>
                    <div class="alert  alert-YES" role="alert">
                        <?php 
                        echo $_SESSION["success"]; 
                        unset($_SESSION["success"]);
                        ?>
                    </div>
                <?php } ?>

                <?php if (isset($_SESSION["error"])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php 
                        echo $_SESSION["error"]; 
                        unset($_SESSION["error"]);
                        ?>
                    </div>
                <?php } ?>
                <h5 class="card-title Line-notify">LINE Notify :</h5>
                <div class="mb-3">
                    <label for="name" class="form-label">?????????????????????????????????????????????????????????</label>
                    <input type="text" class="form-control" name="comment" aria-describedby="comment">
                </div>
                <div class="button">
                    <button type="submit" name="submit" class="btn btn-primary btn-last">Submit</button>
                </div>
            </form>
                
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card Layout-feedback">
          <div class="card-body">
            <h5 class="card-title">Recent Feedback</h5>
            <div class="list-group">
              <a
                href="#"
                class="list-group-item list-group-item-action d-flex gap-3 py-3"
                aria-current="true"
              >
                <img
                  src="logo-Add.png"
                  alt="twbs"
                  style="width: 35px; height: 35px"
                />
                <div class="d-flex gap-2 w-100 justify-content-between">
                  <div>
                    <h6 class="mb-0">????????????????????????????????????????????????????????????</h6>
                    <p class="mb-0 opacity-75">Dec 18,2021 at 11:59pm</p>
                  </div>
                  <small class="opacity-50 text-nowrap">now</small>
                </div>
              </a>
              <a
                href="#"
                class="list-group-item list-group-item-action d-flex gap-3 py-3"
                aria-current="true"
              >
                <img
                  src="logo-Add.png"
                  alt="twbs"
                  style="width: 35px; height: 35px"
                />
                <div class="d-flex gap-2 w-100 justify-content-between">
                  <div>
                    <h6 class="mb-0">????????????????????????????????????????????????????????????</h6>
                    <p class="mb-0 opacity-75">Dec 17,2021 at 01:50pm</p>
                  </div>
                  <small class="opacity-50 text-nowrap">1d</small>
                </div>
              </a>
              <a
                href="#"
                class="list-group-item list-group-item-action d-flex gap-3 py-3"
                aria-current="true"
              >
                <img
                  src="logo-Add.png"
                  alt="twbs"
                  style="width: 35px; height: 35px"
                />
                <div class="d-flex gap-2 w-100 justify-content-between">
                  <div>
                    <h6 class="mb-0">????????????????????????????????????????????????????????????</h6>
                    <p class="mb-0 opacity-75">Dec 16,2021 at 01:50pm</p>
                  </div>
                  <small class="opacity-50 text-nowrap">2d</small>
                </div>
              </a>
              <a
                href="#"
                class="list-group-item list-group-item-action d-flex gap-3 py-3"
                aria-current="true"
              >
                <img
                  src="logo-Add.png"
                  alt="twbs"
                  style="width: 35px; height: 35px"
                />
                <div class="d-flex gap-2 w-100 justify-content-between">
                  <div>
                    <h6 class="mb-0">????????????????????????????????????????????????????????????</h6>
                    <p class="mb-0 opacity-75">Dec 15,2021 at 09:45am</p>
                  </div>
                  <small class="opacity-50 text-nowrap">3d</small>
                </div>
              </a>
              <a
                href="#"
                class="list-group-item list-group-item-action d-flex gap-3 py-3"
                aria-current="true"
              >
                <img
                  src="logo-Check.png"
                  alt="twbs"
                  style="width: 35px; height: 35px"
                />
                <div class="d-flex gap-2 w-100 justify-content-between">
                  <div>
                    <h6 class="mb-0">???????????????????????????????????????????????????</h6>
                    <p class="mb-0 opacity-75">Dec 11,2021 at 10:30am</p>
                    <p class="mb-0 opacity-50">10 out of 10</p>
                  </div>
                  <small class="opacity-50 text-nowrap">1w</small>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"
  ></script>
</html>
