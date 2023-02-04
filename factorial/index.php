<!DOCTYPE html>
<html>
<head>
    <title>Factorial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="cotainer">
  <div class="row justify-content-center">
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">Factorial of a number</div>
        <div class="card-body">
          <form>
            <div class="mb-3">
              <label for="number" class="form-label">Enter Number</label>
              <input type="text" id="number" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="result" class="form-label">Result</label>
              <input type="text" id="result" class="form-control">
            </div>
            <div class="text-center">
              <button type="button" id="calculate" class="btn btn-success btn-lg">Calculate</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="main.js"></script>

</body>
</html>