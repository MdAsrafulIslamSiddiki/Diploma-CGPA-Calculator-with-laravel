<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CGPA Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <center>
        <div class="col-lg-5 shadow mt-5 bg-white p-3">
            <form id="calculator-form" action="{{ route('calculate') }}" method="post">
                @csrf
                <h3 class="fw-bold mb-4">CGPA Calculator</h3>
                <div class="d-flex justify-content-center"> 
                    <label for="regulation" class="mx-2 fw-bold mt-2">Regulation</label>
                    <select  name="regulation" id="regulation" class="form-select w-50" aria-label="Default select example">
                        <option value="2010" {{ old('regulation', '2022') == '2010' ? 'selected' : '' }}>2010</option>
                        <option value="2016" {{ old('regulation', '2022') == '2016' ? 'selected' : '' }}>2016</option>
                        <option value="2022" {{ old('regulation', '2022') == '2022' ? 'selected' : '' }}>2022</option>
                        
                    </select>
                </div>

                <div class="my-3 d-flex  justify-content-center">
                    <input value="{{ old('first') }}" step="0.01" name="first" type="number" placeholder="1st Semester" class="form-control w-50 mx-2" max="4" min="0">
                    <input value="{{ old('second') }}" step="0.01" name="second" type="number" placeholder="2nd Semester" class="form-control w-50 mx-2" max="4" min="0">
                </div>
                <div class="my-3 d-flex  justify-content-center">
                    <input value="{{ old('third') }}" step="0.01" name="third" type="number" placeholder="3rd Semester" class="form-control w-50 mx-2" max="4" min="0">
                    <input value="{{ old('fourth') }}" step="0.01" name="fourth" type="number" placeholder="4th Semester" class="form-control w-50 mx-2" max="4" min="0">
                </div>
                <div class="my-3 d-flex  justify-content-center">
                    <input value="{{ old('fifth') }}" step="0.01" name="fifth" type="number" placeholder="5th Semester" class="form-control w-50 mx-2" max="4" min="0">
                    <input value="{{ old('sixth') }}" step="0.01" name="sixth" type="number" placeholder="6th Semester" class="form-control w-50 mx-2" max="4" min="0">
                </div>
                <div class="my-3 d-flex  justify-content-center">
                    <input value="{{ old('seventh') }}" step="0.01" name="seventh" type="number" placeholder="7th Semester" class="form-control w-50 mx-2" max="4" min="0">
                    <input value="{{ old('eighth') }}" step="0.01" name="eighth" type="number" placeholder="8th Semester" class="form-control w-50 mx-2" max="4" min="0">
                </div>

                <div class=" d-flex  justify-content-between mx-3">
                    <button type="submit" class="btn btn-dark">Calculate</button>
                    @if(session('result'))
                        <span class="text-success fs-4 fw-bold">Result = {{ session('result') }}</span>
                    @endif
                    
                    <button id="reset-btn" type="button" class="btn btn-warning">Reset</button>
                </div>
            </form>

        </div>
    </center>


    <script>
        document.getElementById('reset-btn').addEventListener('click', function() {
            
            let form = document.getElementById('calculator-form');
            form.querySelectorAll('input[type="number"]').forEach(function(input) {
                input.value = '';
            });

            
            let resultElement = document.getElementById('result');
            if (resultElement) {
                resultElement.textContent = 'Result: '; 
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>