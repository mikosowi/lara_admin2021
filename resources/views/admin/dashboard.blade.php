@extends('layouts.master')


@section('title')
    Mikosowi | Mainpage
@endsection

@section('content')
    


<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Employees</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  Name
                </th>
                <th>
                  Position
                </th>
                <th>
                  Age
                </th>
                <th class="text-right">
                  Salary
                </th>
              </thead>
              <tbody>
                <tr>
                  <td>
                    Ebed Bobis
                  </td>
                  <td>
                    Branch Manager
                  </td>
                  <td>
                    36
                  </td>
                  <td class="text-right">
                    P 40,000.00
                  </td>
                </tr>
                <tr>
                  <td>
                    Jan Bobis
                  </td>
                  <td>
                    Sr. Manager
                  </td>
                  <td>
                    35
                  </td>
                  <td class="text-right">
                    P 120,000.00
                  </td>
                </tr>
                <tr>
                  <td>
                   Mike Bobis
                  </td>
                  <td>
                    Janitor
                  </td>
                  <td>
                    34
                  </td>
                  <td class="text-right">
                    P 150.50
                  </td>
                </tr>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="card card-plain">
        <div class="card-header">
          <h4 class="card-title"> Kids</h4>
          <p class="category"> Mga batang makukulit</p>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  Name
                </th>
                <th>
                  Hobby
                </th>
                <th>
                  Age
                </th>
                <th class="text-right">
                  Salary
                </th>
              </thead>
              <tbody>
                <tr>
                  <td>
                    John Luis Bobis
                  </td>
                  <td>
                    Airplane
                  </td>
                  <td>
                    16
                  </td>
                  <td class="text-right">
                    P 250,000.00
                  </td>
                </tr>
                <tr>
                  <td>
                    Hanna Geline BObis
                  </td>
                  <td>
                    Bandaid / Guitar
                  </td>
                  <td>
                    12
                  </td>
                  <td class="text-right">
                    P 150,000.00
                  </td>
                </tr>
                <tr>
                  <td>
                    Michaela Pauline Bobis
                  </td>
                  <td>
                    Piano / Flute / Drawing
                  </td>
                  <td>
                    8
                  </td>
                  <td class="text-right">
                    P 20.00
                  </td>
                </tr>
                <tr>
                  <td>
                    Kirsten Nicole Bobis
                  </td>
                  <td>
                    Singing
                  </td>
                  <td>
                    8
                  </td>
                  <td class="text-right">
                    P 80,000.00
                  </td>
                </tr>
                <tr>
                  <td>
                    Gian Lorenzo Bobis
                  </td>
                  <td>
                    Paper Art
                  </td>
                  <td>
                    6
                  </td>
                  <td class="text-right">
                    P 90,000.00
                  </td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
    
@endsection