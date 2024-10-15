// Wait for the DOM content to be fully loaded before attaching event listeners
document.addEventListener('DOMContentLoaded', function() {
  
  // Function to handle redirection based on toggle switch
  function handleRedirection(toggleId, redirectUrl) {
    const toggleSwitch = document.getElementById(toggleId);
    if (toggleSwitch) {
      toggleSwitch.addEventListener('change', function() {
        if (!this.checked) {
          this.checked = true;
          // Redirect to the desired PHP file or page
          window.location.href = redirectUrl;
        }
      });
    }
  }

  // Applying the handleRedirection function for each toggle switch and corresponding page
  handleRedirection('toggleSwitch', 'Introduction.php');
  handleRedirection('toggleSwitch2', 'BasicSyntax.php');
  handleRedirection('toggleSwitch3', 'Condition.php');
  handleRedirection('toggleSwitch4', 'Arrays.php');
  handleRedirection('toggleSwitch5', 'Classes.php');
  handleRedirection('toggleSwitch6', 'MySql.php');

});
