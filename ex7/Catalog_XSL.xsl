<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html> <!-- xsl extesible style language and is used to create a style sheet. The first statement 
specifies that the file is a style shet and also creates a namespace.
 the second statement declares an xml template. It acts as a set of instructions to transform an xml document into a output document . the attribute match= "/" is pattern matching command.when you need to select xml elements with in your template a pattern is created.This template rule has a pattern that identifies <book> elements and produces an output in a tabular format.-->
<body>
<center>
<h3 style="color:blue;font-weight:bold;">BOOKS INFORMATION</h3>
<table border="1">
<tr bgcolor="orange">
<th>TITLE</th>
<th>AUTHOR</th>
<th>PUBLICATION</th>
<th>ISBN</th>
<th>EDITION</th>
<th>PRICE</th>
</tr>
<xsl:for-each select="bookinfo/Book"> <!--<xsl:for-each> element is used to apply a template repeatedly for each node. for-each processing instruction, slects a set of nodes and process each of them  -->
<tr>
<td bgcolor="pink"><xsl:value-of select="Title"/> <!-- <xsl:value-of> element is used to extract the value of selected node.Value-of processing instruction process the value of the element matching the XPath expression  -->
</td>
<td bgcolor="cyan"><b><xsl:value-of  select="Author"/> </b></td>
<td bgcolor="red"><xsl:value-of select="Publication"/></td>
<td bgcolor="yellow"><xsl:value-of select="ISBN"/></td>
<td bgcolor="blue"><xsl:value-of select="Edition"/></td>
<td bgcolor="magenta"><xsl:value-of select="Price"/></td>
</tr>
</xsl:for-each>
</table>
</center>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
