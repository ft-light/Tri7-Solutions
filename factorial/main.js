document.getElementById("calculate").addEventListener("click", function() {
  let number = document.getElementById('number').value;
  
  const result = factorial(number);

  document.getElementById("result").value = result;

})

function factorial(n) {
  if (n <= 1) {
    return 1;
  }

  return n * factorial(n-1);
}
