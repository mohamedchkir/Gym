<?xml version="1.0" encoding="UTF-8"?>
<?PowerDesigner AppLocale="UTF16" ID="{E8D237A9-9ED0-4CC6-A8AC-0B3CE713CDF7}" Label="" LastModificationDate="1682586794" Name="ModeleOrienteObjet_2" Objects="72" Symbols="23" Target="Java" TargetLink="Reference" Type="{18112060-1A4B-11D1-83D9-444553540000}" signature="CLD_OBJECT_MODEL" version="15.1.0.2850"?>
<!-- Veuillez ne pas modifier ce fichier -->

<Model xmlns:a="attribute" xmlns:c="collection" xmlns:o="object">

<o:RootObject Id="o1">
<c:Children>
<o:Model Id="o2">
<a:ObjectID>E8D237A9-9ED0-4CC6-A8AC-0B3CE713CDF7</a:ObjectID>
<a:Name>ModeleOrienteObjet_2</a:Name>
<a:Code>ModeleOrienteObjet_2</a:Code>
<a:CreationDate>1677446575</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1682586786</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:ModelOptionsText>[ModelOptions]

[ModelOptions\Cld]
CaseSensitive=Yes
DisplayName=Yes
EnableTrans=Yes
EnableRequirements=No
ShowClss=No
DeftAttr=int
DeftMthd=int
DeftParm=int
DeftCont=java.util.Collection
DomnDttp=Yes
DomnChck=No
DomnRule=No
SupportDelay=No
PreviewEditable=Yes
AutoRealize=No
DttpFullName=Yes
DeftClssAttrVisi=private
VBNetPreprocessingSymbols=
CSharpPreprocessingSymbols=

[ModelOptions\Cld\NamingOptionsTemplates]

[ModelOptions\Cld\ClssNamingOptions]

[ModelOptions\Cld\ClssNamingOptions\CLDPCKG]

[ModelOptions\Cld\ClssNamingOptions\CLDPCKG\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,firstLowerWord)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDPCKG\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDDOMN]

[ModelOptions\Cld\ClssNamingOptions\CLDDOMN\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDDOMN\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDCLASS]

[ModelOptions\Cld\ClssNamingOptions\CLDCLASS\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,FirstUpperChar)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDCLASS\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDINTF]

[ModelOptions\Cld\ClssNamingOptions\CLDINTF\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,FirstUpperChar)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDINTF\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\UCDACTR]

[ModelOptions\Cld\ClssNamingOptions\UCDACTR\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\UCDACTR\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\UCDUCAS]

[ModelOptions\Cld\ClssNamingOptions\UCDUCAS\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\UCDUCAS\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\SQDOBJT]

[ModelOptions\Cld\ClssNamingOptions\SQDOBJT\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\SQDOBJT\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\SQDMSSG]

[ModelOptions\Cld\ClssNamingOptions\SQDMSSG\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\SQDMSSG\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CPDCOMP]

[ModelOptions\Cld\ClssNamingOptions\CPDCOMP\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,FirstUpperChar)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CPDCOMP\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDATTR]

[ModelOptions\Cld\ClssNamingOptions\CLDATTR\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,firstLowerWord)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDATTR\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDMETHOD]

[ModelOptions\Cld\ClssNamingOptions\CLDMETHOD\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,firstLowerWord)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDMETHOD\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDPARM]

[ModelOptions\Cld\ClssNamingOptions\CLDPARM\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,firstLowerWord)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDPARM\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMPORT]

[ModelOptions\Cld\ClssNamingOptions\OOMPORT\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMPORT\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMPART]

[ModelOptions\Cld\ClssNamingOptions\OOMPART\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMPART\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDASSC]

[ModelOptions\Cld\ClssNamingOptions\CLDASSC\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,firstLowerWord)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDASSC\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\UCDASSC]

[ModelOptions\Cld\ClssNamingOptions\UCDASSC\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\UCDASSC\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\GNRLLINK]

[ModelOptions\Cld\ClssNamingOptions\GNRLLINK\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\GNRLLINK\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\RQLINK]

[ModelOptions\Cld\ClssNamingOptions\RQLINK\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\RQLINK\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\RLZSLINK]

[ModelOptions\Cld\ClssNamingOptions\RLZSLINK\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\RLZSLINK\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DEPDLINK]

[ModelOptions\Cld\ClssNamingOptions\DEPDLINK\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DEPDLINK\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMACTV]

[ModelOptions\Cld\ClssNamingOptions\OOMACTV\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMACTV\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\ACDOBST]

[ModelOptions\Cld\ClssNamingOptions\ACDOBST\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\ACDOBST\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\STAT]

[ModelOptions\Cld\ClssNamingOptions\STAT\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\STAT\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DPDNODE]

[ModelOptions\Cld\ClssNamingOptions\DPDNODE\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DPDNODE\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DPDCMPI]

[ModelOptions\Cld\ClssNamingOptions\DPDCMPI\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DPDCMPI\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DPDASSC]

[ModelOptions\Cld\ClssNamingOptions\DPDASSC\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DPDASSC\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMVAR]

[ModelOptions\Cld\ClssNamingOptions\OOMVAR\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMVAR\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\FILO]

[ModelOptions\Cld\ClssNamingOptions\FILO\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=&quot;\/:*?&lt;&gt;|&quot;
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\FILO\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_. &quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\FRMEOBJ]

[ModelOptions\Cld\ClssNamingOptions\FRMEOBJ\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\FRMEOBJ\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\FRMELNK]

[ModelOptions\Cld\ClssNamingOptions\FRMELNK\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\FRMELNK\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DefaultClass]

[ModelOptions\Cld\ClssNamingOptions\DefaultClass\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DefaultClass\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Generate]

[ModelOptions\Generate\Cdm]
CheckModel=Yes
SaveLinks=Yes
NameToCode=No
Notation=2

[ModelOptions\Generate\Pdm]
CheckModel=Yes
SaveLinks=Yes
ORMapping=No
NameToCode=No
BuildTrgr=No
TablePrefix=
RefrUpdRule=RESTRICT
RefrDelRule=RESTRICT
IndxPKName=%TABLE%_PK
IndxAKName=%TABLE%_AK
IndxFKName=%REFR%_FK
IndxThreshold=
ColnFKName=%.3:PARENT%_%COLUMN%
ColnFKNameUse=No

[ModelOptions\Generate\Xsm]
CheckModel=Yes
SaveLinks=Yes
ORMapping=No
NameToCode=No</a:ModelOptionsText>
<c:ObjectLanguage>
<o:Shortcut Id="o3">
<a:ObjectID>26B50B77-11EE-4501-A21B-932C77E1EFF6</a:ObjectID>
<a:Name>Java</a:Name>
<a:Code>Java</a:Code>
<a:CreationDate>1677446575</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677446575</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:TargetStereotype/>
<a:TargetID>0DEDDB90-46E2-45A0-886E-411709DA0DC9</a:TargetID>
<a:TargetClassID>1811206C-1A4B-11D1-83D9-444553540000</a:TargetClassID>
</o:Shortcut>
</c:ObjectLanguage>
<c:ExtendedModelDefinitions>
<o:Shortcut Id="o4">
<a:ObjectID>009DC696-1F12-4328-A03A-70ADC67688D5</a:ObjectID>
<a:Name>WSDL for Java</a:Name>
<a:Code>WSDLJava</a:Code>
<a:CreationDate>1677446576</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677446576</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:TargetStereotype/>
<a:TargetID>C8F5F7B2-CF9D-4E98-8301-959BB6E86C8A</a:TargetID>
<a:TargetClassID>186C8AC3-D3DC-11D3-881C-00508B03C75C</a:TargetClassID>
</o:Shortcut>
</c:ExtendedModelDefinitions>
<c:ClassDiagrams>
<o:ClassDiagram Id="o5">
<a:ObjectID>C1034464-92F0-47FE-8A8E-EF4A5C668E55</a:ObjectID>
<a:Name>DiagrammeClasses_1</a:Name>
<a:Code>DiagrammeClasses_1</a:Code>
<a:CreationDate>1677446575</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1682586786</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DisplayPreferences>[DisplayPreferences]

[DisplayPreferences\CLD]

[DisplayPreferences\General]
Adjust to text=Yes
Snap Grid=No
Constrain Labels=Yes
Display Grid=No
Show Page Delimiter=Yes
Grid size=800
Graphic unit=2
Window color=255 255 255
Background image=
Background mode=8
Watermark image=
Watermark mode=8
Show watermark on screen=No
Gradient mode=0
Gradient end color=255 255 255
Show Swimlane=No
SwimlaneVert=Yes
TreeVert=No
CompDark=0

[DisplayPreferences\Object]
Mode=0
Trunc Length=80
Word Length=80
Word Text=!&quot;&quot;#$%&amp;&#39;()*+,-./:;&lt;=&gt;?@[\]^_`{|}~
Shortcut IntIcon=Yes
Shortcut IntLoct=Yes
Shortcut IntFullPath=No
Shortcut IntLastPackage=Yes
Shortcut ExtIcon=Yes
Shortcut ExtLoct=No
Shortcut ExtFullPath=No
Shortcut ExtLastPackage=Yes
Shortcut ExtIncludeModl=Yes
EObjShowStrn=Yes
ExtendedObject.Comment=No
ExtendedObject.IconPicture=No
ExtendedObject_SymbolLayout=&lt;Form&gt;[CRLF] &lt;StandardAttribute Name=&quot;Stéréotype&quot; Attribute=&quot;Stereotype&quot; Prefix=&quot;&amp;lt;&amp;lt;&quot; Suffix=&quot;&amp;gt;&amp;gt;&quot; Alignment=&quot;CNTR&quot; Caption=&quot;&quot; Mandatory=&quot;No&quot; /&gt;[CRLF] &lt;StandardAttribute Name=&quot;Nom de l&amp;#39;objet&quot; Attribute=&quot;DisplayName&quot; Prefix=&quot;&quot; Suffix=&quot;&quot; Alignment=&quot;CNTR&quot; Caption=&quot;&quot; Mandatory=&quot;Yes&quot; /&gt;[CRLF] &lt;Separator Name=&quot;Séparateur&quot; /&gt;[CRLF] &lt;StandardAttribute Name=&quot;Commentaire&quot; Attribute=&quot;Comment&quot; Prefix=&quot;&quot; Suffix=&quot;&quot; Alignment=&quot;LEFT&quot; Caption=&quot;&quot; Mandatory=&quot;No&quot; /&gt;[CRLF] &lt;StandardAttribute Name=&quot;Icône&quot; Attribute=&quot;IconPicture&quot; Prefix=&quot;&quot; Suffix=&quot;&quot; Alignment=&quot;CNTR&quot; Caption=&quot;&quot; Mandatory=&quot;Yes&quot; /&gt;[CRLF]&lt;/Form&gt;
ELnkShowStrn=Yes
ELnkShowName=Yes
ExtendedLink_SymbolLayout=&lt;Form&gt;[CRLF] &lt;Form Name=&quot;Centre&quot; &gt;[CRLF]  &lt;StandardAttribute Name=&quot;Stéréotype&quot; Attribute=&quot;Stereotype&quot; Prefix=&quot;&amp;lt;&amp;lt;&quot; Suffix=&quot;&amp;gt;&amp;gt;&quot; Caption=&quot;&quot; Mandatory=&quot;No&quot; /&gt;[CRLF]  &lt;StandardAttribute Name=&quot;Nom&quot; Attribute=&quot;DisplayName&quot; Prefix=&quot;&quot; Suffix=&quot;&quot; Caption=&quot;&quot; Mandatory=&quot;No&quot; /&gt;[CRLF] &lt;/Form&gt;[CRLF] &lt;Form Name=&quot;Source&quot; &gt;[CRLF] &lt;/Form&gt;[CRLF] &lt;Form Name=&quot;Destination&quot; &gt;[CRLF] &lt;/Form&gt;[CRLF]&lt;/Form&gt;
FileObject.Stereotype=No
FileObject.DisplayName=Yes
FileObject.LocationOrName=No
FileObject.IconPicture=No
FileObject.IconMode=Yes
FileObject_SymbolLayout=&lt;Form&gt;[CRLF] &lt;StandardAttribute Name=&quot;Stéréotype&quot; Attribute=&quot;Stereotype&quot; Prefix=&quot;&amp;lt;&amp;lt;&quot; Suffix=&quot;&amp;gt;&amp;gt;&quot; Alignment=&quot;CNTR&quot; Caption=&quot;&quot; Mandatory=&quot;No&quot; /&gt;[CRLF] &lt;ExclusiveChoice Name=&quot;Choix exclusif&quot; Mandatory=&quot;Yes&quot; Display=&quot;HorizontalRadios&quot; &gt;[CRLF]  &lt;StandardAttribute Name=&quot;Nom&quot; Attribute=&quot;DisplayName&quot; Prefix=&quot;&quot; Suffix=&quot;&quot; Alignment=&quot;CNTR&quot; Caption=&quot;&quot; Mandatory=&quot;No&quot; /&gt;[CRLF]  &lt;StandardAttribute Name=&quot;Emplacement&quot; Attribute=&quot;LocationOrName&quot; Prefix=&quot;&quot; Suffix=&quot;&quot; Alignment=&quot;CNTR&quot; Caption=&quot;&quot; Mandatory=&quot;No&quot; /&gt;[CRLF] &lt;/ExclusiveChoice&gt;[CRLF] &lt;StandardAttribute Name=&quot;Icône&quot; Attribute=&quot;IconPicture&quot; Prefix=&quot;&quot; Suffix=&quot;&quot; Alignment=&quot;CNTR&quot; Caption=&quot;&quot; Mandatory=&quot;Yes&quot; /&gt;[CRLF]&lt;/Form&gt;
PckgShowStrn=Yes
Package.Comment=No
Package.IconPicture=No
Package_SymbolLayout=
Display Model Version=Yes
Class.IconPicture=No
Class_SymbolLayout=
Interface.IconPicture=No
Interface_SymbolLayout=
Port.IconPicture=No
Port_SymbolLayout=
ClssShowSttr=Yes
Class.Comment=No
ClssShowCntr=Yes
ClssShowAttr=Yes
ClssAttrTrun=No
ClssAttrMax=3
ClssShowMthd=Yes
ClssMthdTrun=No
ClssMthdMax=3
ClssShowInnr=Yes
IntfShowSttr=Yes
Interface.Comment=No
IntfShowAttr=Yes
IntfAttrTrun=No
IntfAttrMax=3
IntfShowMthd=Yes
IntfMthdTrun=No
IntfMthdMax=3
IntfShowCntr=Yes
IntfShowInnr=Yes
PortShowName=Yes
PortShowType=No
PortShowMult=No
AttrShowVisi=Yes
AttrVisiFmt=1
AttrShowStrn=Yes
AttrShowDttp=Yes
AttrShowDomn=No
AttrShowInit=Yes
MthdShowVisi=Yes
MthdVisiFmt=1
MthdShowStrn=Yes
MthdShowRttp=Yes
MthdShowParm=Yes
AsscShowName=No
AsscShowCntr=Yes
AsscShowRole=Yes
AsscShowOrdr=Yes
AsscShowMult=Yes
AsscMultStr=Yes
AsscShowStrn=No
GnrlShowName=No
GnrlShowStrn=Yes
GnrlShowCntr=Yes
RlzsShowName=No
RlzsShowStrn=Yes
RlzsShowCntr=Yes
DepdShowName=No
DepdShowStrn=Yes
DepdShowCntr=Yes
RqlkShowName=No
RqlkShowStrn=Yes
RqlkShowCntr=Yes

[DisplayPreferences\Symbol]

[DisplayPreferences\Symbol\FRMEOBJ]
STRNFont=Arial,8,N
STRNFont color=0, 0, 0
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0, 0, 0
LABLFont=Arial,8,N
LABLFont color=0, 0, 0
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Width=6000
Height=2000
Brush color=255 255 255
Fill Color=Yes
Brush style=6
Brush bitmap mode=12
Brush gradient mode=64
Brush gradient color=192 192 192
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 255 128 128
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\FRMELNK]
CENTERFont=Arial,8,N
CENTERFont color=0, 0, 0
Line style=2
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Brush color=255 255 255
Fill Color=Yes
Brush style=1
Brush bitmap mode=12
Brush gradient mode=0
Brush gradient color=118 118 118
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 128 128 255
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\FILO]
OBJSTRNFont=Arial,8,N
OBJSTRNFont color=0, 0, 0
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0, 0, 0
LCNMFont=Arial,8,N
LCNMFont color=0, 0, 0
AutoAdjustToText=Yes
Keep aspect=Yes
Keep center=Yes
Keep size=No
Width=2400
Height=2400
Brush color=255 255 255
Fill Color=No
Brush style=1
Brush bitmap mode=12
Brush gradient mode=0
Brush gradient color=118 118 118
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 0 0 255
Shadow color=192 192 192
Shadow=-1

[DisplayPreferences\Symbol\CLDPCKG]
STRNFont=Arial,8,N
STRNFont color=0 0 0
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0 0 0
LABLFont=Arial,8,N
LABLFont color=0 0 0
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Width=4800
Height=3600
Brush color=255 255 192
Fill Color=Yes
Brush style=6
Brush bitmap mode=12
Brush gradient mode=65
Brush gradient color=255 255 255
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 178 178 178
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\CLDCLASS]
STRNFont=Arial,8,N
STRNFont color=0 0 0
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0 0 0
CNTRFont=Arial,8,N
CNTRFont color=0 0 0
AttributesFont=Arial,8,N
AttributesFont color=0 0 0
ClassPrimaryAttributeFont=Arial,8,U
ClassPrimaryAttributeFont color=0 0 0
OperationsFont=Arial,8,N
OperationsFont color=0 0 0
InnerClassifiersFont=Arial,8,N
InnerClassifiersFont color=0 0 0
LABLFont=Arial,8,N
LABLFont color=0 0 0
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Width=4800
Height=3600
Brush color=233 202 131
Fill Color=Yes
Brush style=6
Brush bitmap mode=12
Brush gradient mode=65
Brush gradient color=255 255 255
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 128 0 0
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\CLDINTF]
STRNFont=Arial,8,N
STRNFont color=0 0 0
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0 0 0
CNTRFont=Arial,8,N
CNTRFont color=0 0 0
AttributesFont=Arial,8,N
AttributesFont color=0 0 0
OperationsFont=Arial,8,N
OperationsFont color=0 0 0
InnerClassifiersFont=Arial,8,N
InnerClassifiersFont color=0 0 0
LABLFont=Arial,8,N
LABLFont color=0 0 0
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Width=4800
Height=3600
Brush color=205 156 156
Fill Color=Yes
Brush style=6
Brush bitmap mode=12
Brush gradient mode=65
Brush gradient color=255 255 255
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 128 0 0
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\OOMPORT]
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0 0 0
AutoAdjustToText=No
Keep aspect=No
Keep center=No
Keep size=No
Width=825
Height=800
Brush color=250 241 211
Fill Color=Yes
Brush style=6
Brush bitmap mode=12
Brush gradient mode=65
Brush gradient color=255 255 255
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 128 64 0
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\CLDASSC]
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0 0 0
MULAFont=Arial,8,N
MULAFont color=0 0 0
Line style=2
Pen=1 0 128 0 64
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\INNERLINK]
Line style=2
Pen=1 0 128 0 64
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\CLDACLK]
Line style=2
Pen=2 0 128 0 64
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\GNRLLINK]
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0 0 0
Line style=2
Pen=1 0 128 0 64
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\RLZSLINK]
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0 0 0
Line style=2
Pen=3 0 128 0 64
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\RQLINK]
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0 0 0
Line style=2
Pen=1 0 128 0 64
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\DEPDLINK]
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0 0 0
Line style=2
Pen=2 0 128 0 64
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\USRDEPD]
OBJXSTRFont=Arial,8,N
OBJXSTRFont color=0 0 0
Line style=2
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Brush color=255 255 255
Fill Color=Yes
Brush style=1
Brush bitmap mode=12
Brush gradient mode=0
Brush gradient color=118 118 118
Brush background image=
Custom shape=
Custom text mode=0
Pen=2 0 128 0 64
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\Free Symbol]
Free TextFont=Arial,8,N
Free TextFont color=0 0 0
Line style=2
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Brush color=255 255 255
Fill Color=Yes
Brush style=1
Brush bitmap mode=12
Brush gradient mode=0
Brush gradient color=118 118 118
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 128 64 0
Shadow color=192 192 192
Shadow=0</a:DisplayPreferences>
<a:PaperSize>(8268, 11693)</a:PaperSize>
<a:PageMargins>((315,354), (433,354))</a:PageMargins>
<a:PageOrientation>1</a:PageOrientation>
<a:PaperSource>15</a:PaperSource>
<c:Symbols>
<o:AssociationSymbol Id="o6">
<a:CreationDate>1677596333</a:CreationDate>
<a:ModificationDate>1682586780</a:ModificationDate>
<a:Rect>((-47,-14210), (22393,-5220))</a:Rect>
<a:ListOfPoints>((-47,-6395),(19942,-6395),(19942,-14210),(14539,-14210))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>3592</a:ArrowStyle>
<a:LineColor>4194432</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
MULA 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ClassSymbol Ref="o7"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ClassSymbol Ref="o8"/>
</c:DestinationSymbol>
<c:Object>
<o:Association Ref="o9"/>
</c:Object>
</o:AssociationSymbol>
<o:AssociationSymbol Id="o10">
<a:CreationDate>1677596344</a:CreationDate>
<a:ModificationDate>1682586780</a:ModificationDate>
<a:Rect>((-272,-33269), (4741,-5746))</a:Rect>
<a:ListOfPoints>((-272,-5746),(-272,-15848),(4741,-15848),(4741,-33269))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>3592</a:ArrowStyle>
<a:LineColor>4194432</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
MULA 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ClassSymbol Ref="o7"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ClassSymbol Ref="o11"/>
</c:DestinationSymbol>
<c:Object>
<o:Association Ref="o12"/>
</c:Object>
</o:AssociationSymbol>
<o:AssociationSymbol Id="o13">
<a:CreationDate>1680395466</a:CreationDate>
<a:ModificationDate>1682581416</a:ModificationDate>
<a:Rect>((-21574,-32938), (9413,-22379))</a:Rect>
<a:ListOfPoints>((-21574,-22379),(-21574,-31765),(9413,-31765))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>3592</a:ArrowStyle>
<a:LineColor>4194432</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
MULA 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ClassSymbol Ref="o14"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ClassSymbol Ref="o11"/>
</c:DestinationSymbol>
<c:Object>
<o:Association Ref="o15"/>
</c:Object>
</o:AssociationSymbol>
<o:AssociationSymbol Id="o16">
<a:CreationDate>1682333899</a:CreationDate>
<a:ModificationDate>1682586780</a:ModificationDate>
<a:SourceTextOffset>(-1163, 388)</a:SourceTextOffset>
<a:Rect>((-21736,-25028), (-1075,-7163))</a:Rect>
<a:ListOfPoints>((-1075,-7163),(-1075,-25028),(-21736,-25028))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>4194432</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
MULA 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ClassSymbol Ref="o7"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ClassSymbol Ref="o14"/>
</c:DestinationSymbol>
<c:Object>
<o:Association Ref="o17"/>
</c:Object>
</o:AssociationSymbol>
<o:AssociationSymbol Id="o18">
<a:CreationDate>1682579706</a:CreationDate>
<a:ModificationDate>1682586778</a:ModificationDate>
<a:Rect>((-15839,-19876), (682,-6248))</a:Rect>
<a:ListOfPoints>((682,-18703),(-15839,-18703),(-15839,-6248))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>3336</a:ArrowStyle>
<a:LineColor>4194432</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
MULA 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ClassSymbol Ref="o19"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ClassSymbol Ref="o20"/>
</c:DestinationSymbol>
<c:Object>
<o:Association Ref="o21"/>
</c:Object>
</o:AssociationSymbol>
<o:AssociationSymbol Id="o22">
<a:CreationDate>1682579759</a:CreationDate>
<a:ModificationDate>1682586780</a:ModificationDate>
<a:Rect>((-3100,-19678), (15082,-4900))</a:Rect>
<a:ListOfPoints>((1319,-19678),(15082,-19678),(15082,-6075),(-3100,-6075))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>3336</a:ArrowStyle>
<a:LineColor>4194432</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
MULA 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ClassSymbol Ref="o19"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ClassSymbol Ref="o7"/>
</c:DestinationSymbol>
<c:Object>
<o:Association Ref="o23"/>
</c:Object>
</o:AssociationSymbol>
<o:AssociationSymbol Id="o24">
<a:CreationDate>1682580075</a:CreationDate>
<a:ModificationDate>1682586774</a:ModificationDate>
<a:DestinationTextOffset>(-324, -860)</a:DestinationTextOffset>
<a:Rect>((-22790,-21377), (-16819,-5368))</a:Rect>
<a:ListOfPoints>((-20766,-21377),(-20766,-5368),(-16819,-5368))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>3592</a:ArrowStyle>
<a:LineColor>4194432</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
MULA 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ClassSymbol Ref="o14"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ClassSymbol Ref="o20"/>
</c:DestinationSymbol>
<c:Object>
<o:Association Ref="o25"/>
</c:Object>
</o:AssociationSymbol>
<o:ClassSymbol Id="o11">
<a:CreationDate>1677446585</a:CreationDate>
<a:ModificationDate>1682581416</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((1064,-38134), (10150,-26524))</a:Rect>
<a:LineColor>128</a:LineColor>
<a:FillColor>8637161</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
CNTR 0 Arial,8,N
Attributes 0 Arial,8,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Arial,8,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o26"/>
</c:Object>
</o:ClassSymbol>
<o:ClassSymbol Id="o27">
<a:CreationDate>1677446594</a:CreationDate>
<a:ModificationDate>1682586740</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-6687,5689), (4693,21195))</a:Rect>
<a:LineColor>128</a:LineColor>
<a:FillColor>8637161</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
CNTR 0 Arial,8,N
Attributes 0 Arial,8,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Arial,8,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o28"/>
</c:Object>
</o:ClassSymbol>
<o:ClassSymbol Id="o19">
<a:CreationDate>1677448030</a:CreationDate>
<a:ModificationDate>1682581416</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-2469,-21487), (4763,-16693))</a:Rect>
<a:LineColor>128</a:LineColor>
<a:FillColor>8637161</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
CNTR 0 Arial,8,N
Attributes 0 Arial,8,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Arial,8,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o29"/>
</c:Object>
</o:ClassSymbol>
<o:ClassSymbol Id="o8">
<a:CreationDate>1677459613</a:CreationDate>
<a:ModificationDate>1682586761</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((10233,-19624), (19319,-8014))</a:Rect>
<a:LineColor>128</a:LineColor>
<a:FillColor>8637161</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
CNTR 0 Arial,8,N
Attributes 0 Arial,8,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Arial,8,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o30"/>
</c:Object>
</o:ClassSymbol>
<o:TextSymbol Id="o31">
<a:Text>manage
</a:Text>
<a:CreationDate>1677463935</a:CreationDate>
<a:ModificationDate>1682581416</a:ModificationDate>
<a:Rect>((19154,-33899), (23953,-30300))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:LineColor>0</a:LineColor>
<a:DashStyle>7</a:DashStyle>
<a:FillColor>0</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:TextSymbol>
<o:ClassSymbol Id="o20">
<a:CreationDate>1677595606</a:CreationDate>
<a:ModificationDate>1682586774</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-18901,-9206), (-10045,-1898))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>8637161</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
CNTR 0 Arial,8,N
Attributes 0 Arial,8,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Arial,8,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:ManuallyResized>1</a:ManuallyResized>
<c:Object>
<o:Class Ref="o32"/>
</c:Object>
</o:ClassSymbol>
<o:ClassSymbol Id="o7">
<a:CreationDate>1677595607</a:CreationDate>
<a:ModificationDate>1682586780</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-4431,-8062), (1335,-2138))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>8637161</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
CNTR 0 Arial,8,N
Attributes 0 Arial,8,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Arial,8,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:ManuallyResized>1</a:ManuallyResized>
<c:Object>
<o:Class Ref="o33"/>
</c:Object>
</o:ClassSymbol>
<o:ClassSymbol Id="o14">
<a:CreationDate>1677595608</a:CreationDate>
<a:ModificationDate>1682581416</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-26186,-26831), (-17510,-21065))</a:Rect>
<a:LineColor>128</a:LineColor>
<a:FillColor>8637161</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
CNTR 0 Arial,8,N
Attributes 0 Arial,8,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Arial,8,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o34"/>
</c:Object>
</o:ClassSymbol>
<o:TextSymbol Id="o35">
<a:Text>avoir



</a:Text>
<a:CreationDate>1680395495</a:CreationDate>
<a:ModificationDate>1682581416</a:ModificationDate>
<a:Rect>((10357,-23468), (15156,-19869))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:LineColor>0</a:LineColor>
<a:DashStyle>7</a:DashStyle>
<a:FillColor>0</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:TextSymbol>
<o:ClassSymbol Id="o36">
<a:CreationDate>1682586786</a:CreationDate>
<a:ModificationDate>1682586786</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((7839,-2793), (12638,1028))</a:Rect>
<a:LineColor>128</a:LineColor>
<a:FillColor>8637161</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
CNTR 0 Arial,8,N
Attributes 0 Arial,8,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Arial,8,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o37"/>
</c:Object>
</o:ClassSymbol>
</c:Symbols>
</o:ClassDiagram>
</c:ClassDiagrams>
<c:DefaultDiagram>
<o:ClassDiagram Ref="o5"/>
</c:DefaultDiagram>
<c:Classes>
<o:Class Id="o26">
<a:ObjectID>87C3FED4-7AC1-4074-BDD0-05A5AA62FA7C</a:ObjectID>
<a:Name>Product</a:Name>
<a:Code>Product</a:Code>
<a:CreationDate>1677446585</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1680185627</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:UseParentNamespace>0</a:UseParentNamespace>
<c:Attributes>
<o:Attribute Id="o38">
<a:ObjectID>0290DD9D-1A1D-49A4-A6A1-5399BC52386F</a:ObjectID>
<a:Name>id</a:Name>
<a:Code>id</a:Code>
<a:CreationDate>1677446630</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677460126</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>int</a:DataType>
</o:Attribute>
<o:Attribute Id="o39">
<a:ObjectID>4E554289-581E-442F-A45A-076CD8138E87</a:ObjectID>
<a:Name>name</a:Name>
<a:Code>name</a:Code>
<a:CreationDate>1677446630</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677460126</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
</o:Attribute>
<o:Attribute Id="o40">
<a:ObjectID>DEDEAE4C-2C0D-46CD-BDE1-833B555C3CA0</a:ObjectID>
<a:Name>price</a:Name>
<a:Code>price</a:Code>
<a:CreationDate>1677446630</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677460126</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>Float</a:DataType>
</o:Attribute>
<o:Attribute Id="o41">
<a:ObjectID>B0051404-5151-4C74-B6BE-0034F1C48E39</a:ObjectID>
<a:Name>quantity</a:Name>
<a:Code>quantity</a:Code>
<a:CreationDate>1677446630</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677460126</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>int</a:DataType>
</o:Attribute>
<o:Attribute Id="o42">
<a:ObjectID>F5CD6BF8-8101-4468-9FB8-9A4918F6262F</a:ObjectID>
<a:Name>description</a:Name>
<a:Code>description</a:Code>
<a:CreationDate>1677446630</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677460126</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
</o:Attribute>
<o:Attribute Id="o43">
<a:ObjectID>3582EC7B-34AD-4CCF-AF3E-52609764B52F</a:ObjectID>
<a:Name>image</a:Name>
<a:Code>image</a:Code>
<a:CreationDate>1680185599</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1680185627</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
</o:Attribute>
</c:Attributes>
<c:Operations>
<o:Operation Id="o44">
<a:ObjectID>3D691B31-8D86-4684-A900-7EEA64591C33</a:ObjectID>
<a:Name>Create</a:Name>
<a:Code>create</a:Code>
<a:CreationDate>1677511793</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677511988</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:ReturnType>Boolean</a:ReturnType>
<a:TemplateBody>%DefaultBody%</a:TemplateBody>
</o:Operation>
<o:Operation Id="o45">
<a:ObjectID>053C5808-6180-436E-ADA5-CDCAB5F53740</a:ObjectID>
<a:Name>Update</a:Name>
<a:Code>update</a:Code>
<a:CreationDate>1677511793</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677511988</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:ReturnType>Boolean</a:ReturnType>
<a:TemplateBody>%DefaultBody%</a:TemplateBody>
</o:Operation>
<o:Operation Id="o46">
<a:ObjectID>D760E305-2892-4556-857F-0753C8FDA834</a:ObjectID>
<a:Name>Delete</a:Name>
<a:Code>delete</a:Code>
<a:CreationDate>1677511793</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677511988</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:ReturnType>Boolean</a:ReturnType>
<a:TemplateBody>%DefaultBody%</a:TemplateBody>
</o:Operation>
<o:Operation Id="o47">
<a:ObjectID>2C2CE0CC-61E3-4569-88AD-F1B85FAE9760</a:ObjectID>
<a:Name>select</a:Name>
<a:Code>select</a:Code>
<a:CreationDate>1677511793</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677511988</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:ReturnType>Boolean</a:ReturnType>
<a:TemplateBody>%DefaultBody%</a:TemplateBody>
</o:Operation>
</c:Operations>
</o:Class>
<o:Class Id="o28">
<a:ObjectID>8BEBF53B-F359-4AE4-AE38-8064106BBA44</a:ObjectID>
<a:Name>User</a:Name>
<a:Code>User</a:Code>
<a:CreationDate>1677446594</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1682580248</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:UseParentNamespace>0</a:UseParentNamespace>
<c:Attributes>
<o:Attribute Id="o48">
<a:ObjectID>F152A8D3-377F-4F1C-8F3B-B7D63E8791CA</a:ObjectID>
<a:Name>id</a:Name>
<a:Code>id</a:Code>
<a:CreationDate>1677446779</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677460036</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>int</a:DataType>
</o:Attribute>
<o:Attribute Id="o49">
<a:ObjectID>73CF4B83-5366-45E5-A544-CD19AA42562E</a:ObjectID>
<a:Name>name</a:Name>
<a:Code>name</a:Code>
<a:CreationDate>1677446779</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677460036</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
</o:Attribute>
<o:Attribute Id="o50">
<a:ObjectID>2CC575F2-9405-45AC-9CBA-017E6E54DE1A</a:ObjectID>
<a:Name>email</a:Name>
<a:Code>email</a:Code>
<a:CreationDate>1677446779</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677460068</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
</o:Attribute>
<o:Attribute Id="o51">
<a:ObjectID>9A398F80-2255-4BE5-9748-A26EBBAC97C6</a:ObjectID>
<a:Name>password</a:Name>
<a:Code>password</a:Code>
<a:CreationDate>1677446779</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677460068</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
</o:Attribute>
<o:Attribute Id="o52">
<a:ObjectID>E54433C6-2237-4C6F-8163-A6BC754B4204</a:ObjectID>
<a:Name>email_virified_at</a:Name>
<a:Code>emailVirifiedAt</a:Code>
<a:CreationDate>1677447810</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677460068</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>Date</a:DataType>
</o:Attribute>
<o:Attribute Id="o53">
<a:ObjectID>E613EA0C-0E42-4BBD-8E13-4136FEB4D6D5</a:ObjectID>
<a:Name>image</a:Name>
<a:Code>image</a:Code>
<a:CreationDate>1682333582</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1682333658</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
</o:Attribute>
<o:Attribute Id="o54">
<a:ObjectID>8AEB5597-0C00-4915-8D03-2D9253006C9A</a:ObjectID>
<a:Name>created_at</a:Name>
<a:Code>createdAt</a:Code>
<a:CreationDate>1677447831</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677460068</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>Date</a:DataType>
</o:Attribute>
<o:Attribute Id="o55">
<a:ObjectID>5FE9213D-8F2A-41DC-BBB9-5B763D0C291E</a:ObjectID>
<a:Name>updated_at</a:Name>
<a:Code>updatedAt</a:Code>
<a:CreationDate>1677447831</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677460068</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>Date</a:DataType>
</o:Attribute>
<o:Attribute Id="o56">
<a:ObjectID>0B80A1F6-1A22-4333-9051-E082DE343F66</a:ObjectID>
<a:Name>payement_date</a:Name>
<a:Code>deletedAt</a:Code>
<a:CreationDate>1677447831</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1682580248</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>Date</a:DataType>
</o:Attribute>
</c:Attributes>
<c:Operations>
<o:Operation Id="o57">
<a:ObjectID>F9F50A32-5C6B-4022-9956-9F1E46293818</a:ObjectID>
<a:Name>login</a:Name>
<a:Code>login</a:Code>
<a:CreationDate>1677446949</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677447977</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:ReturnType>Boolean</a:ReturnType>
<a:TemplateBody>%DefaultBody%</a:TemplateBody>
</o:Operation>
<o:Operation Id="o58">
<a:ObjectID>CEC423E4-C01E-445C-AA9C-AFA1FFCBDAF2</a:ObjectID>
<a:Name>sign up</a:Name>
<a:Code>signUp</a:Code>
<a:CreationDate>1677446966</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677459954</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:ReturnType>Boolean</a:ReturnType>
<a:TemplateBody>%DefaultBody%</a:TemplateBody>
</o:Operation>
<o:Operation Id="o59">
<a:ObjectID>90DEAFC2-C325-4CD5-907C-0E234120FCD7</a:ObjectID>
<a:Name>resetPassword</a:Name>
<a:Code>resetPassword</a:Code>
<a:CreationDate>1677447908</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677459954</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:ReturnType>Boolean</a:ReturnType>
<a:TemplateBody>%DefaultBody%</a:TemplateBody>
</o:Operation>
<o:Operation Id="o60">
<a:ObjectID>FA066C33-0823-4C0F-B659-83338B77B744</a:ObjectID>
<a:Name>editProfile</a:Name>
<a:Code>editProfile</a:Code>
<a:CreationDate>1677447908</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677459954</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:ReturnType>Boolean</a:ReturnType>
<a:TemplateBody>%DefaultBody%</a:TemplateBody>
</o:Operation>
<o:Operation Id="o61">
<a:ObjectID>175FDB44-8FB4-4117-9DBD-FF26966CAFAB</a:ObjectID>
<a:Name>deleteProfile</a:Name>
<a:Code>deleteProfile</a:Code>
<a:CreationDate>1677447983</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677459954</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:ReturnType>Boolean</a:ReturnType>
<a:TemplateBody>%DefaultBody%</a:TemplateBody>
</o:Operation>
</c:Operations>
</o:Class>
<o:Class Id="o29">
<a:ObjectID>65DAA09D-F585-463E-8D6B-EE5EF32777C9</a:ObjectID>
<a:Name>Permission</a:Name>
<a:Code>Permission</a:Code>
<a:CreationDate>1677448030</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677463851</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:UseParentNamespace>0</a:UseParentNamespace>
<c:Attributes>
<o:Attribute Id="o62">
<a:ObjectID>D2BEE77D-2494-4019-8007-BFA543317FFF</a:ObjectID>
<a:Name>id</a:Name>
<a:Code>id</a:Code>
<a:CreationDate>1677448142</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677460102</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>int</a:DataType>
</o:Attribute>
<o:Attribute Id="o63">
<a:ObjectID>527E6BA8-41E2-4890-829D-B70632007D43</a:ObjectID>
<a:Name>name</a:Name>
<a:Code>name</a:Code>
<a:CreationDate>1677448142</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677460102</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
</o:Attribute>
</c:Attributes>
</o:Class>
<o:Class Id="o30">
<a:ObjectID>6A6BBC3F-4BE6-4DCE-8AE4-4ABA1C236FBB</a:ObjectID>
<a:Name>Material</a:Name>
<a:Code>Material</a:Code>
<a:CreationDate>1677459613</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1680185891</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:UseParentNamespace>0</a:UseParentNamespace>
<c:Attributes>
<o:Attribute Id="o64">
<a:ObjectID>C28080FE-8F29-4D05-A3C1-F44686E1AE54</a:ObjectID>
<a:Name>id</a:Name>
<a:Code>id</a:Code>
<a:CreationDate>1677460134</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677460251</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>int</a:DataType>
</o:Attribute>
<o:Attribute Id="o65">
<a:ObjectID>E0C9B02A-9C0B-4A08-A685-8B6F2E9C7CBF</a:ObjectID>
<a:Name>name</a:Name>
<a:Code>name</a:Code>
<a:CreationDate>1677460134</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677460251</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
</o:Attribute>
<o:Attribute Id="o66">
<a:ObjectID>D7D68D0F-2737-4F6F-9D88-F2BE09E718C1</a:ObjectID>
<a:Name>quantity</a:Name>
<a:Code>quantity</a:Code>
<a:CreationDate>1677460134</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677460251</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>int</a:DataType>
</o:Attribute>
<o:Attribute Id="o67">
<a:ObjectID>2AFF0D63-5FAF-47B9-AE32-A0CCDBC1DA2C</a:ObjectID>
<a:Name>price</a:Name>
<a:Code>price</a:Code>
<a:CreationDate>1677460134</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677460251</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>Float</a:DataType>
</o:Attribute>
<o:Attribute Id="o68">
<a:ObjectID>50D5D39E-F056-4EFA-B637-74E77D6E3821</a:ObjectID>
<a:Name>description</a:Name>
<a:Code>description</a:Code>
<a:CreationDate>1677460134</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677460251</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
</o:Attribute>
<o:Attribute Id="o69">
<a:ObjectID>79CF77A0-14FF-4ED2-B49D-655BDA0A34ED</a:ObjectID>
<a:Name>image</a:Name>
<a:Code>image</a:Code>
<a:CreationDate>1680185870</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1680185903</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
</o:Attribute>
</c:Attributes>
<c:Operations>
<o:Operation Id="o70">
<a:ObjectID>BB83E95E-52BE-4F1A-B0B2-23E99E62D8F4</a:ObjectID>
<a:Name>create</a:Name>
<a:Code>create</a:Code>
<a:CreationDate>1677464338</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677464386</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:ReturnType>Boolean</a:ReturnType>
<a:TemplateBody>%DefaultBody%</a:TemplateBody>
</o:Operation>
<o:Operation Id="o71">
<a:ObjectID>323FC414-7DFC-42DE-B7CC-F51CD09A791E</a:ObjectID>
<a:Name>update</a:Name>
<a:Code>update</a:Code>
<a:CreationDate>1677464338</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677464416</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:ReturnType>Boolean</a:ReturnType>
<a:TemplateBody>%DefaultBody%</a:TemplateBody>
</o:Operation>
<o:Operation Id="o72">
<a:ObjectID>39CFA31F-DC63-4C15-815C-19B8F383D3A9</a:ObjectID>
<a:Name>delete</a:Name>
<a:Code>delete</a:Code>
<a:CreationDate>1677464338</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677464416</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:ReturnType>Boolean</a:ReturnType>
<a:TemplateBody>%DefaultBody%</a:TemplateBody>
</o:Operation>
<o:Operation Id="o73">
<a:ObjectID>A00BD4FD-ED61-4558-A49A-9EED4352C3EC</a:ObjectID>
<a:Name>select</a:Name>
<a:Code>select</a:Code>
<a:CreationDate>1677464338</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677464416</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:ReturnType>Boolean</a:ReturnType>
<a:TemplateBody>%DefaultBody%</a:TemplateBody>
</o:Operation>
</c:Operations>
</o:Class>
<o:Class Id="o32">
<a:ObjectID>E611F34C-F6C7-4566-B89D-BE99971C7001</a:ObjectID>
<a:Name>Coach</a:Name>
<a:Code>Coach</a:Code>
<a:CreationDate>1677595606</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1682586702</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:UseParentNamespace>0</a:UseParentNamespace>
<c:Attributes>
<o:Attribute Id="o74">
<a:ObjectID>8C99E1CF-F023-4D6E-9462-35EEDB69B347</a:ObjectID>
<a:Name>id</a:Name>
<a:Code>id</a:Code>
<a:CreationDate>1677595632</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677595684</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o75">
<a:ObjectID>1B04D90B-4973-4F53-9B5E-A50EF57CD4E9</a:ObjectID>
<a:Name>name</a:Name>
<a:Code>name</a:Code>
<a:CreationDate>1677595632</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677595975</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o76">
<a:ObjectID>A0234F64-34D6-41C9-96AA-010E7CCCCF50</a:ObjectID>
<a:Name>tel</a:Name>
<a:Code>tel</a:Code>
<a:CreationDate>1677595632</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677595975</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o77">
<a:ObjectID>594C6A47-314D-4D76-866E-16FAEFE6450D</a:ObjectID>
<a:Name>email</a:Name>
<a:Code>email</a:Code>
<a:CreationDate>1677595929</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677595975</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o78">
<a:ObjectID>DE39B22E-C492-48E0-BE40-33C5F90BD2A1</a:ObjectID>
<a:Name>description</a:Name>
<a:Code>description</a:Code>
<a:CreationDate>1677595632</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677595975</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
</c:Attributes>
</o:Class>
<o:Class Id="o33">
<a:ObjectID>7835C601-7526-42BE-A639-41A26A1A83E2</a:ObjectID>
<a:Name>Admin</a:Name>
<a:Code>Admin</a:Code>
<a:CreationDate>1677595607</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677595923</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:UseParentNamespace>0</a:UseParentNamespace>
<c:Attributes>
<o:Attribute Id="o79">
<a:ObjectID>1FC1D42E-33E8-48ED-BDB6-D8A18153AEEA</a:ObjectID>
<a:Name>id</a:Name>
<a:Code>id</a:Code>
<a:CreationDate>1677595755</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677595923</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o80">
<a:ObjectID>0FE0FBE5-89E9-4496-BD85-B46140CB407A</a:ObjectID>
<a:Name>name</a:Name>
<a:Code>name</a:Code>
<a:CreationDate>1677595755</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677595923</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
</c:Attributes>
</o:Class>
<o:Class Id="o34">
<a:ObjectID>6A97B31C-28AB-4ED8-999A-B4755BF30F4E</a:ObjectID>
<a:Name>Comment</a:Name>
<a:Code>Comment</a:Code>
<a:CreationDate>1677595608</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1682580344</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:UseParentNamespace>0</a:UseParentNamespace>
<c:Attributes>
<o:Attribute Id="o81">
<a:ObjectID>4BF3822F-7B68-44AC-A434-4C114C091891</a:ObjectID>
<a:Name>id</a:Name>
<a:Code>id</a:Code>
<a:CreationDate>1677620631</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677620665</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o82">
<a:ObjectID>8850EE46-B199-454F-8F46-8472309AA625</a:ObjectID>
<a:Name>content</a:Name>
<a:Code>content</a:Code>
<a:CreationDate>1677620631</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677620665</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
</c:Attributes>
<c:Operations>
<o:Operation Id="o83">
<a:ObjectID>82725ECC-EAD9-4B80-A143-6357957E7745</a:ObjectID>
<a:Name>create</a:Name>
<a:Code>create</a:Code>
<a:CreationDate>1682580308</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1682580344</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:ReturnType>Boolean</a:ReturnType>
<a:TemplateBody>%DefaultBody%</a:TemplateBody>
</o:Operation>
<o:Operation Id="o84">
<a:ObjectID>4CA3A191-E14F-4EC0-9FDD-3E503261778E</a:ObjectID>
<a:Name>delete</a:Name>
<a:Code>delete</a:Code>
<a:CreationDate>1682580308</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1682580344</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:ReturnType>int</a:ReturnType>
<a:TemplateBody>%DefaultBody%</a:TemplateBody>
</o:Operation>
</c:Operations>
</o:Class>
<o:Class Id="o37">
<a:ObjectID>78555773-B976-4DEE-8577-A2680C3A3ABE</a:ObjectID>
<a:Name>Client</a:Name>
<a:Code>Client</a:Code>
<a:CreationDate>1682586786</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1682586794</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:UseParentNamespace>0</a:UseParentNamespace>
</o:Class>
</c:Classes>
<c:Associations>
<o:Association Id="o9">
<a:ObjectID>007A55ED-5536-491A-98BA-6FD2F7A649F1</a:ObjectID>
<a:Name>Association_8</a:Name>
<a:Code>association8</a:Code>
<a:CreationDate>1677596333</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1677596528</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:RoleAIndicator>C</a:RoleAIndicator>
<a:RoleAMultiplicity>1</a:RoleAMultiplicity>
<a:RoleBMultiplicity>0..*</a:RoleBMultiplicity>
<a:ExtendedAttributesText>{0DEDDB90-46E2-45A0-886E-411709DA0DC9},Java,224={72FA5C48-5524-4DF7-8187-ABB19AB5AF9E},roleAContainer,6=&lt;None&gt;
{F6FFC71C-C472-4261-A710-B0BCC0BF4D58},roleAImplementationClass,6=&lt;None&gt;
{C11C9F66-6453-43A2-8824-6654518CF65A},roleBImplementationClass,17=java.util.HashSet

</a:ExtendedAttributesText>
<c:Object1>
<o:Class Ref="o30"/>
</c:Object1>
<c:Object2>
<o:Class Ref="o33"/>
</c:Object2>
</o:Association>
<o:Association Id="o12">
<a:ObjectID>F0FD6C70-27EB-4A1D-82D1-7A54EBC2EB12</a:ObjectID>
<a:Name>Association_9</a:Name>
<a:Code>association9</a:Code>
<a:CreationDate>1677596344</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1682580042</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:RoleAIndicator>C</a:RoleAIndicator>
<a:RoleAMultiplicity>1..*</a:RoleAMultiplicity>
<a:RoleBMultiplicity>0..*</a:RoleBMultiplicity>
<a:ExtendedAttributesText>{0DEDDB90-46E2-45A0-886E-411709DA0DC9},Java,224={72FA5C48-5524-4DF7-8187-ABB19AB5AF9E},roleAContainer,6=&lt;None&gt;
{F6FFC71C-C472-4261-A710-B0BCC0BF4D58},roleAImplementationClass,6=&lt;None&gt;
{C11C9F66-6453-43A2-8824-6654518CF65A},roleBImplementationClass,17=java.util.HashSet

</a:ExtendedAttributesText>
<c:Object1>
<o:Class Ref="o26"/>
</c:Object1>
<c:Object2>
<o:Class Ref="o33"/>
</c:Object2>
</o:Association>
<o:Association Id="o15">
<a:ObjectID>F40220A9-CE7A-41B9-9710-7805589EEACA</a:ObjectID>
<a:Name>Association_11</a:Name>
<a:Code>association11</a:Code>
<a:CreationDate>1680395466</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1680395466</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:RoleAIndicator>C</a:RoleAIndicator>
<a:RoleAMultiplicity>0..1</a:RoleAMultiplicity>
<a:RoleBMultiplicity>0..*</a:RoleBMultiplicity>
<a:ExtendedAttributesText>{0DEDDB90-46E2-45A0-886E-411709DA0DC9},Java,224={72FA5C48-5524-4DF7-8187-ABB19AB5AF9E},roleAContainer,6=&lt;None&gt;
{F6FFC71C-C472-4261-A710-B0BCC0BF4D58},roleAImplementationClass,6=&lt;None&gt;
{C11C9F66-6453-43A2-8824-6654518CF65A},roleBImplementationClass,17=java.util.HashSet

</a:ExtendedAttributesText>
<c:Object1>
<o:Class Ref="o26"/>
</c:Object1>
<c:Object2>
<o:Class Ref="o34"/>
</c:Object2>
</o:Association>
<o:Association Id="o17">
<a:ObjectID>58B37534-3F10-4CDA-9800-2160BF4B6562</a:ObjectID>
<a:Name>Association_7</a:Name>
<a:Code>association7</a:Code>
<a:CreationDate>1682333900</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1682333900</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:RoleAMultiplicity>0..1</a:RoleAMultiplicity>
<a:RoleBMultiplicity>0..*</a:RoleBMultiplicity>
<a:ExtendedAttributesText>{0DEDDB90-46E2-45A0-886E-411709DA0DC9},Java,224={72FA5C48-5524-4DF7-8187-ABB19AB5AF9E},roleAContainer,6=&lt;None&gt;
{F6FFC71C-C472-4261-A710-B0BCC0BF4D58},roleAImplementationClass,6=&lt;None&gt;
{C11C9F66-6453-43A2-8824-6654518CF65A},roleBImplementationClass,17=java.util.HashSet

</a:ExtendedAttributesText>
<c:Object1>
<o:Class Ref="o34"/>
</c:Object1>
<c:Object2>
<o:Class Ref="o33"/>
</c:Object2>
</o:Association>
<o:Association Id="o21">
<a:ObjectID>A0E18637-407F-4104-878A-2EB287E68383</a:ObjectID>
<a:Name>Association_12</a:Name>
<a:Code>association12</a:Code>
<a:CreationDate>1682579706</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1682579706</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:RoleAIndicator>A</a:RoleAIndicator>
<a:RoleAMultiplicity>0..1</a:RoleAMultiplicity>
<a:RoleBMultiplicity>0..*</a:RoleBMultiplicity>
<a:ExtendedAttributesText>{0DEDDB90-46E2-45A0-886E-411709DA0DC9},Java,224={72FA5C48-5524-4DF7-8187-ABB19AB5AF9E},roleAContainer,6=&lt;None&gt;
{F6FFC71C-C472-4261-A710-B0BCC0BF4D58},roleAImplementationClass,6=&lt;None&gt;
{C11C9F66-6453-43A2-8824-6654518CF65A},roleBImplementationClass,17=java.util.HashSet

</a:ExtendedAttributesText>
<c:Object1>
<o:Class Ref="o32"/>
</c:Object1>
<c:Object2>
<o:Class Ref="o29"/>
</c:Object2>
</o:Association>
<o:Association Id="o23">
<a:ObjectID>724C81E8-2457-4E3C-8A32-B120B7267402</a:ObjectID>
<a:Name>Association_13</a:Name>
<a:Code>association13</a:Code>
<a:CreationDate>1682579759</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1682579759</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:RoleAIndicator>A</a:RoleAIndicator>
<a:RoleAMultiplicity>0..1</a:RoleAMultiplicity>
<a:RoleBMultiplicity>0..*</a:RoleBMultiplicity>
<a:ExtendedAttributesText>{0DEDDB90-46E2-45A0-886E-411709DA0DC9},Java,224={72FA5C48-5524-4DF7-8187-ABB19AB5AF9E},roleAContainer,6=&lt;None&gt;
{F6FFC71C-C472-4261-A710-B0BCC0BF4D58},roleAImplementationClass,6=&lt;None&gt;
{C11C9F66-6453-43A2-8824-6654518CF65A},roleBImplementationClass,17=java.util.HashSet

</a:ExtendedAttributesText>
<c:Object1>
<o:Class Ref="o33"/>
</c:Object1>
<c:Object2>
<o:Class Ref="o29"/>
</c:Object2>
</o:Association>
<o:Association Id="o25">
<a:ObjectID>15EE0A43-0ACE-4B30-88FE-C9A79582726D</a:ObjectID>
<a:Name>Association_15</a:Name>
<a:Code>association15</a:Code>
<a:CreationDate>1682580075</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1682580075</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:RoleAIndicator>C</a:RoleAIndicator>
<a:RoleAMultiplicity>0..1</a:RoleAMultiplicity>
<a:RoleBMultiplicity>0..*</a:RoleBMultiplicity>
<a:ExtendedAttributesText>{0DEDDB90-46E2-45A0-886E-411709DA0DC9},Java,224={72FA5C48-5524-4DF7-8187-ABB19AB5AF9E},roleAContainer,6=&lt;None&gt;
{F6FFC71C-C472-4261-A710-B0BCC0BF4D58},roleAImplementationClass,6=&lt;None&gt;
{C11C9F66-6453-43A2-8824-6654518CF65A},roleBImplementationClass,17=java.util.HashSet

</a:ExtendedAttributesText>
<c:Object1>
<o:Class Ref="o32"/>
</c:Object1>
<c:Object2>
<o:Class Ref="o34"/>
</c:Object2>
</o:Association>
</c:Associations>
<c:TargetModels>
<o:TargetModel Id="o85">
<a:ObjectID>7CBA24A1-8F5F-4FAC-A404-D6211A7B7CF8</a:ObjectID>
<a:Name>Java</a:Name>
<a:Code>Java</a:Code>
<a:CreationDate>1677446575</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1682277857</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:TargetModelURL>file:///%_OBJLANG%/java5-j2ee14.xol</a:TargetModelURL>
<a:TargetModelID>0DEDDB90-46E2-45A0-886E-411709DA0DC9</a:TargetModelID>
<a:TargetModelClassID>1811206C-1A4B-11D1-83D9-444553540000</a:TargetModelClassID>
<c:SessionShortcuts>
<o:Shortcut Ref="o3"/>
</c:SessionShortcuts>
</o:TargetModel>
<o:TargetModel Id="o86">
<a:ObjectID>01044BE2-91E2-41E8-B6D3-890F82600E73</a:ObjectID>
<a:Name>WSDL for Java</a:Name>
<a:Code>WSDLJava</a:Code>
<a:CreationDate>1677446576</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1682277859</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:TargetModelURL>file:///%_XEM%/WSDLJ2EE.xem</a:TargetModelURL>
<a:TargetModelID>C8F5F7B2-CF9D-4E98-8301-959BB6E86C8A</a:TargetModelID>
<a:TargetModelClassID>186C8AC3-D3DC-11D3-881C-00508B03C75C</a:TargetModelClassID>
<c:SessionShortcuts>
<o:Shortcut Ref="o4"/>
</c:SessionShortcuts>
</o:TargetModel>
</c:TargetModels>
</o:Model>
</c:Children>
</o:RootObject>

</Model>