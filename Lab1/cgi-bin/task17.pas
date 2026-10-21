PROGRAM FuncGetPostparametr(INPUT, OUTPUT);

USES
  DOS;

FUNCTION GetQueryStringParameter(Key: STRING): STRING;
VAR
  QueryString: STRING;
  PosName: INTEGER;
BEGIN
  QueryString := '&' + GetEnv('QUERY_STRING');
  PosName := Pos('&' + Key + '=', QueryString);
  IF PosName > 0 THEN
  BEGIN
    Delete(QueryString, 1, PosName + Length(Key) + 1);
    PosName := Pos('&', QueryString);
    IF PosName > 0 THEN
      GetQueryStringParameter := Copy(QueryString, 1, PosName - 1)
    ELSE
      GetQueryStringParameter := QueryString;
  END
  ELSE
    GetQueryStringParameter := '';
END;
                               
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN('First Name: ', GetQueryStringParameter('first_name'));
  WRITELN('Last Name: ', GetQueryStringParameter('last_name'));
  WRITELN('Age: ', GetQueryStringParameter('age'));
END.
