<h1>Vormist lugemine JS abil</h1>
<table border="1" width="40%">
    <tr>
        <td>
            <label for="nimi">Sisesta oma nimi:</label>
        </td>
        <td>
            <input type="text" placeholder="Eesnimi" id="nimi" oninput="nimiLugemine()">
            <!-- brauseris F12 ja kontrollida consolis vigu-->
            <input type="button" value="Puhasta" onclick="puhasta()">
        </td>
        <td>
            <div id="vastus">Vastusekoht</div>
        </td>
    </tr>
    <tr>
        <td>
            <label for="varv">Vali värv:</label>
        </td>
        <td>
            <input type="color" id="varv" onchange="varvValik()">
            <input type="button" value="Värvi" onclick="varvValik()">
            <input type="button" value="Puhasta" onclick="puhasta()">
        </td>
        <td id="vastus2">

        </td>
    </tr>
    <tr>
        <td>Tee oma valik:</td>
        <td>
            <input type="radio" name="nagu" id="naerata" value="naerata" onclick="radioValik()">
            <label for="naerata">Naerata</label>
            <br>
            <input type="radio" name="nagu" id="kurvasta" value="kurvasta" onclick="radioValik()">
            <label for="kurvasta">Kurvasta</label>
        </td>
        <td>
            <img src="" id="pilt">
            <div id="vastus3"></div>
        </td>
    </tr>
    <tr>
        <td>
            <label for="tuju">Hinda oma tuju👌</label>
        </td>
        <td>
            <input type="range" id="tuju" min="0" max="100" value="0" onchange="tujuSlider()">
        </td>
        <td>
            <div id="vastus4"></div>
        </td>
    </tr>
    <tr>
        <td>
            <label>Vali oma unistuste kool</label>
        </td>
        <td>
            <select name="kool" id="kool" onchange="kooliValik()">
                <option value="">vali...</option>
                <option value="TTHK">TTHK</option>
                <option value="Polüteh">Polüteh</option>
                <option value="Taltech">Taltech</option>
                <option value="Techno">Techno</option>
            </select>
        </td>
        <td>
            <div id="vastus5"></div>
        </td>
    </tr>

</table>
<fieldset>
    <legend>Vormist lugemine JS abil</legend>
    <label>test</label>
</fieldset>
