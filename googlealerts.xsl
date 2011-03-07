<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns:atom="http://www.w3.org/2005/Atom"
  xmlns:dc="http://purl.org/dc/elements/1.1/">
  	<xsl:output method="xml" encoding="utf-8"/>
	
	<xsl:template match="/">
		<xsl:apply-templates select="/atom:feed"/>
	</xsl:template>
	
	<xsl:template match="/atom:feed">
		<root>
			<xsl:apply-templates select="atom:entry"/>
		</root>
	</xsl:template>
	
	<xsl:template match="atom:entry">
		<item>
			<text>
			<xsl:value-of select="concat(substring-before(atom:updated,'T'),': ','&#60;a href=&#34;',atom:link/@href,'&#34;&#62;',atom:title,'&#60;/a&#62;')"/>
			</text>
			<type>0</type>
		</item>
	</xsl:template>

</xsl:stylesheet>