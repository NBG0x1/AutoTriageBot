<?php
/*
Copyright (c) 2017, salesforce.com, inc.
All rights reserved.
Licensed under the BSD 3-Clause license.
For full license text, see LICENSE.txt file in the repo root  or https://opensource.org/licenses/BSD-3-Clause
*/
  if ($_COOKIE['NAME'] == 'VALUE') {
    header("Status: 301 Moved Permanently");
    header("Location: ". $_GET['q']);
  } else {
    echo "Cookie not set!";
  }
?>
