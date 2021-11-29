<?php
    $title = 'Home';
    require_once 'include/header.php';
    include 'Controller/includes.php';
?>

<?php
    $root_url = $GLOBALS['root_url'];
?>

<a href="<?php echo "$root_url/View/export.php"; ?>">Export</a>
<a href="xxx">Report</a>
<a href="xxx">About</a>

<p>&nbsp;</p>
<form action="<?php echo "$root_url/Controller/logic/exportLogic.php"; ?>" method="POST">
    <table>
        <tbody>
            <tr>
                <td><h4>Filter</h4></td>
                <td><a href="xxx">Add Filter</a></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>
                    <select name="filter-name1">
                        <option value="" selected>---Select---</option>
                        <option value="type">Type</option>
                        <option value="team">Team</option>
                        <option value="position">Position</option>
                        <option value="player">Player</option>
                        <option value="format">Format</option>
                    </select>
                </td>
                <td><input type="text" style="max-length:50;" name="filter-value1"></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>
                    <select name="filter-name2">
                        <option value="" selected>---Select---</option>
                        <option value="type">Type</option>
                        <option value="team">Team</option>
                        <option value="position">Position</option>
                        <option value="player">Player</option>
                        <option value="format">Format</option>
                    </select>
                </td>
                <td><input type="text" style="max-length:50;" name="filter-value2"></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" value="Generate Export Report"></td>
                <td>&nbsp;</td>
            </tr>
        </tbody>
    </table>
</form>
<p>&nbsp;</p>

<?php
    require_once 'include/footer.php';
?>

