<?php 
require 'models/verein_modle.php';
?>

<p style="display:none;"><?= $_SERVER['verein'] ?></p>
<p style="display:none;"><?= $_SERVER['id'] ?></p>

<script>

    const vereinElement = document.getElementById('verein');
    const idElement = document.getElementById('id');


    if (!vereinElement || !idElement) {
        console.error('Error: Required elements not found!');
    } else {

        
        const verein = encodeURIComponent(vereinElement.textContent.trim());
        const id = encodeURIComponent(idElement.textContent.trim());
        
        // Construct the API URL
        const apiUrl = `http://unsung.cc/api/v1/verein-v1?verein=${verein}&id=${id}`;

        // Make the POST request
        fetch(apiUrl, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json' // Adjust if different content type is needed
            }
        })
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            const teamData = data;
            const teamContainer = document.getElementById('team-container');

            if (!teamContainer) {
                console.error('Error: Team container element not found!');
            } else {
                const teamHtml = teamData.map(player => {
                    return `
                        <div class="player">
                            <h2>${player.Name}</h2>
                            <p>Alter: ${player.Alter}</p>
                            <p>Position: ${player.Position}</p>
                            <p>Nationalität: ${player.Nationalitaet}</p>
                            <p>Marktwert: ${player.Marktwert}</p>
                            <p>Rückennummer: ${player.SpielerNummer}</p>
                            <p>Vertrag bis: ${player.Vertrag}</p>
                        </div>
                    `;
                }).join('');

                teamContainer.innerHTML = teamHtml;
            }
        })
        .catch(error => {
            console.error('Error:', error);
            // Handle errors here
        });
    }
</script>