<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/collection">
  <html>
    <head>
      <link href="recipes.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
      <xsl:for-each select="recipe">
      <xsl:sort select="preptime" order="descending" data-type="number" />
      <!-- <xsl:sort select="cookingtime" order="descending" data-type="number" /> -->
        <div class="box">
        <h3> <xsl:value-of select="name" /> </h3>
        <table>
          <tr>
            <th> Preparation time: (min) </th>
            <td> <xsl:value-of select="preptime"/> </td>
          </tr>
          <tr>
            <th> Cooking time: (min) </th>
            <td> <xsl:value-of select="cookingtime"/> </td>
          </tr>
          <tr>
            <th> Ingredients: </th>
            <td> <xsl:value-of select="ingredients"/> </td>
          </tr>
          <tr>
            <th> Steps: </th>
            <td> <xsl:value-of select="prepsteps"/> </td>
          </tr>
        </table>
        <!-- <xsl:for-each select="prepsteps">
          <xsl:value-of select="step"/>
        </xsl:for-each> -->
        </div>
      <!-- </xsl:for-each> -->
      </xsl:for-each>

    </body>
  </html>
</xsl:template>
</xsl:stylesheet>
