// Add animation or additional behavior if needed
document.querySelectorAll('.image-card').forEach(card => {
  card.addEventListener('mouseenter', () => {
      console.log(card.id + ' hovered');
  });
});
