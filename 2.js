fetch('submit.php', {
  method: 'POST',
  body: new URLSearchParams({
    name: nameValue,
    email: emailValue,
    course: courseValue
  })
})
.then(res => res.json())
.then(data => {
  if (data.status === 'success') {
    alert("✅ Enrolled successfully!");
  } else {
    alert("❌ Failed: " + data.message);
  }
})
.catch(err => {
  console.error(err);
  alert("Something went wrong: " + err.message);
});
