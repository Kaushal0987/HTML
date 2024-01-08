<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">

  <xsl:template match="item">
    <xsl:variable name="productColor">
      <xsl:choose>
        <xsl:when test="price &gt; 100">green</xsl:when>
        <xsl:otherwise>red</xsl:otherwise>
      </xsl:choose>
    </xsl:variable>

    <p>
      <xsl:text>Product Name: </xsl:text>
      <xsl:value-of select="itemName"/>
      <xsl:text> - </xsl:text>
      <xsl:text>Price: </xsl:text>
      <xsl:attribute name="style">
        <xsl:text>color: </xsl:text>
        <xsl:value-of select="$productColor"/>
      </xsl:attribute>
      <xsl:value-of select="price"/>
    </p>
  </xsl:template>

  <xsl:template match="/">
    <html>
      <body>
        <xsl:apply-templates select="//item">
          <xsl:sort select="quantity" order="descending"/>
        </xsl:apply-templates>
      </body>
    </html>
  </xsl:template>

</xsl:stylesheet>