@include('layouts.app')
@extends('epsa.sidebar')

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
    <div class="row">
<div class="col-md-12">
    <div class="table-responsive px-2">
        <table class="table table-success">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone No</th>
                    <th scope="col">City</th>
                    <th scope="col">Branch Manager</th>
                    <th scope="col">PO BOX</th>
                    <th scope="col">Distance From Addis Abeba</th>
                    <th scope="col">Fax Number</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hubs as $hub)
                <tr>
                    <td><span class="bg-blight">{{ $hub->id }}</span></td>
                    <td><span class="bg-bdark">{{ $hub->name }}</span></span></td>
                    <td><span class="bg-blight">{{ $hub->phoneno }}</span></td>
                    <td><span class="bg-bdark">{{ $hub->city }}</span></td>
                    <td><span class="bg-bdark">{{ $hub->branchmanager }}</span></td>
                    <td> <span class="bg-bdark">{{ $hub->pobox }}</span></td>
                    <td><span class="bg-blight">{{ $hub->distancefromaddis }}</span></td>
                    <td><span class="bg-blight">{{ $hub->faxnumber }}</span></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex align-items-center justify-content-between px-3 mt-3">
        <div class="bg-bdark fs13"> <span>Page</span> <input class="input-10 text-center" type="text" value="1"> <span><span class="px-1">of</span>1</span> </div>
        <div class="d-flex justify-content-end bg-bdark fs13"> <span class="pe-1">Show</span> <input class="input-10" type="number" value="25"> <span class="ps-2"><span class="pe-2">/</span>Page</span> </div>
    </div>
</div>
</div>

</body>
</html>
