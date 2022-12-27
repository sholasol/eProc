<?php
// $id = $_SESSION['uid'];

// function random_code($size)
// {
//     $length = $size;
//     $key = '';
//     $keys = range(0, 5);

//     for ($i = 0; $i < $length; $i++) {
//         $key .= $keys[array_rand($keys)];
//     }
//     return $key;
// }
// $code = random_code(5);

// if (isset($_POST['submit'])) {
//     $grade = $_POST['grade'];
//     $salary = $_POST['salary'];
//     $tax = $_POST['tax'];

//     $allowance = $_POST['allowName'];
//     $allowVal = $_POST['allowVal'];

//     $deduction = $_POST['deductName'];
//     $deductVal = $_POST['deductVal'];

//     $created = date('Y-m-d');
//     if (empty($grade || $salary || $tax)) {
//         echo "<script>alert('Oops! above fields are required') </script>";
//     } elseif (empty($allowVal) || empty($deductVal)) {
//         echo "<script>alert('Please include Allowance and deduction') </script>";
//     } else {
//         foreach ($allowVal as $i => $item) {
//             $insAllow = dbConnect()->prepare(
//                 'INSERT INTO allowance SET allowances=?, value=?, code=?, created=?'
//             );
//             $insAllow->execute([
//                 $allowance[$i],
//                 $allowVal[$i],
//                 $code,
//                 $created,
//             ]);
//         }

//         foreach ($deductVal as $i => $be) {
//             $insDeduct = dbConnect()->prepare(
//                 'INSERT INTO deduction SET deductions=?, value=?, code=?, created=?'
//             );
//             $insDeduct->execute([
//                 $deduction[$i],
//                 $deductVal[$i],
//                 $code,
//                 $created,
//             ]);
//         }
//         $insgrade = dbConnect()->prepare(
//             'INSERT INTO salary_temp SET salary_grade=?, salary=?, tax_id=?, created=?,code=?'
//         );
//         $insgrade->execute([$grade, $salary, $tax, $created, $code]);

//         echo "<script>alert('Salary Grade added Successfully'); window.location='salary-template'; </script>";
//     }
// }
?>

<div id="content-page" class="content-page">
    <form method="POST" action="" wire:submit.prevent="subSalTemp">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">New Salary Template</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <form wire:submit.prevent="createTemp">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationDefaultUsername">Salary Grade Name</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text " id="inputGroupPrepend2">
                                                    <i class="fa fa-area-chart"></i></span>
                                            </div>
                                            <input type="text" list="exp" class="form-control" wire:model="grade"
                                                id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                                            <datalist id="exp">
                                                <option value="GRADE A">
                                                <option value="GRADE B">
                                                <option value="GRADE C">
                                                <option value="GRADE C">
                                                <option value="GRADE E">
                                            </datalist>
                                        </div>
                                        @error('grade') <p style="color: crimson">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefaultUsername">Basic Salary</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text " id="inputGroupPrepend2">
                                                    <i class="fa fa-money"></i></span>
                                            </div>
                                            <input type="text" class="form-control" wire:model="salary"
                                                id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                                        </div>
                                        @error('salary') <p style="color: crimson">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault04">Tax</label>
                                        <select wire:model="tax" class="form-control" id="validationDefault04" required>
                                            <option value="">Choose...</option>
                                            <option value="7">7%</option>
                                        </select>
                                        @error('tax') <p style="color: crimson">{{ $message }}</p> @enderror
                                    </div>

                                </div>


                                <!-- <button name="submit" type="submit" class="btn btn-primary">Submit</button> -->
                                <!-- <button type="submit" class="btn iq-bg-danger">cancle</button> -->
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-6">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between col-md-12">
                            <div class="iq-header-title">
                                <h4 class="card-title">Allowance</h4>
                            </div>
                            <div>
                                <a href="#" wire:click.prevent="AddNewAllowance({{ $i }})"><i
                                        class="fa fa-plus-circle"></i>
                                    Add new</a>
                            </div>
                        </div>
                        <div class="iq-card-body" id="deductBody" style="margin-top: -15px;">
                            <div
                                style="display: flex; justify-content: space-around; border-bottom: 2px solid; margin-bottom: 10px;">
                                <h5>Allowances</h5>
                                <h5>Amount(₦)</h5>
                            </div>

                            <div class="col-md-12 mb-2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="form-control form-control-sm" wire:model="allowanceName.0">
                                    </div>
                                    <div class="col-md-5">
                                        <input class="form-control form-control-sm" wire:model="allowanceVal.0">
                                    </div>
                                </div>
                            </div>
                            @foreach ($inputs as $key => $value )
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="form-control form-control-sm"
                                            wire:model.lazy="allowanceName.{{ $value }}">
                                    </div>
                                    <div class="col-md-5">
                                        <input class="form-control form-control-sm"
                                            wire:model.lazy="allowanceVal.{{ $value }}">
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <a href="#" wire:click.prevent="RemoveAllowance({{ $key }})">
                                                <i class="fa fa-trash text-danger"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-6">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between col-md-12">
                            <div class="iq-header-title">
                                <h4 class="card-title">Deduction</h4>
                            </div>
                            <div>
                                <a href="#" wire:click.prevent="AddNewDeduction({{ $j }})"><i
                                        class="fa fa-plus-circle"></i>
                                    Add new</a>
                            </div>
                        </div>
                        <div class="iq-card-body" id="deductBody" style="margin-top: -15px;">
                            <div
                                style="display: flex; justify-content: space-around; border-bottom: 2px solid; margin-bottom: 10px;">
                                <h5>Deductions</h5>
                                <h5>Amount(₦)</h5>
                            </div>

                            <div class="col-md-12 mb-2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="form-control form-control-sm" wire:model="deductName.0">
                                    </div>
                                    <div class="col-md-5">
                                        <input class="form-control form-control-sm" wire:model="deductVal.0">
                                    </div>
                                </div>
                            </div>
                            @foreach ($ded_input as $key => $value )
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="form-control form-control-sm"
                                            wire:model.lazy="deductName.{{ $value }}">
                                    </div>
                                    <div class="col-md-5">
                                        <input class="form-control form-control-sm"
                                            wire:model.lazy="deductVal.{{ $value }}">
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <a href="#" wire:click.prevent="RemoveDeduction({{ $key }})">
                                                <i class="fa fa-trash text-danger"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>



            </div>
            <div class="col-md-12">
                <button type="submit" name="submit" class="btn btn-success btn-block">Submit</button>
            </div>
        </div>
    </form>
</div>
