<body>
  <button class="btn" data-btn>Submit</button>
  <div class="checkmark-container">
    <svg x="0px" y="0px" fill="none" class="checkmark-svg" viewBox="0 0 25 30">
     <path d="M2,19.2C5.9,23.6,9.4,28,9.4,28L23,2"/>
   </svg>
  </div>
  <script>
    const btn = document.querySelector("[data-btn]")
        btn.addEventListener("click", () => {
        btn.classList.add("animating")
    })
  </script>
</body>