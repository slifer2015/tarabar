<div align="center">
    <table border="0" cellspacing="0" cellpadding="0" style="max-width:600px">
        <tbody>
        <tr>
            <td>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody>

                    </tbody>
                </table>
            </td>
        </tr>
        <tr height="16"></tr>
        <tr>
            <td>
                <table bgcolor="#2aabd2" width="100%" border="0" cellspacing="0" cellpadding="0"
                       style="min-width:332px;max-width:600px;border:1px solid #e0e0e0;border-bottom:0;border-top-left-radius:3px;border-top-right-radius:3px">
                    <tbody>
                    <tr>
                        <td height="30px" colspan="3"></td>
                    </tr>
                    <tr>
                        <td width="32px"></td>
                        <td align="right" dir="rtl" style="font-family:Tahoma,Roboto-Regular,Helvetica,Arial,sans-serif;font-size:20px;color:#ffffff;line-height:1.25">
فرم تماس با ما
                        </td>
                        <td width="32px"></td>
                    </tr>
                    <tr>
                        <td height="18px" colspan="3"></td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table dir="rtl" bgcolor="#FAFAFA" width="100%" border="0" cellspacing="0" cellpadding="0"
                       style="min-width:332px;max-width:600px;border:1px solid #f0f0f0;border-bottom:1px solid #c0c0c0;border-top:0;border-bottom-left-radius:3px;border-bottom-right-radius:3px">
                    <tbody>
                    <tr height="16px">
                        <td width="32px" rowspan="3"></td>
                        <td></td>
                        <td width="32px" rowspan="3"></td>
                    </tr>
                    <tr>
                        <td>
                            <table style="min-width:300px" border="0" cellspacing="0" cellpadding="0">
                                <tbody>
                                <tr>
                                    <td style="font-family:Tahoma,Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#202020;line-height:1.5">
مدیر محترم ،
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-family:Tahoma,Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#202020;line-height:1.5;width: 100px;">
                                        <br><br>
                                        نام :
                                        <div align="center" dir="ltr">
                                        </div>
                                    </td>
                                    <td style="font-family:Tahoma,Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#202020;line-height:1.5">
                                        <br><br>
                                        {{$contact->name}}
                                        <div align="center" dir="ltr">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-family:Tahoma,Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#202020;line-height:1.5;width: 100px;">
                                        <br><br>
                                        ایمیل :
                                        <div align="center" dir="ltr">
                                        </div>
                                    </td>
                                    <td style="font-family:Tahoma,Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#202020;line-height:1.5">
                                        <br><br>
                                        {{$contact->email}}
                                        <div align="center" dir="ltr">
                                        </div>
                                    </td>
                                </tr>
                                <tr height="32px"></tr>
                                <tr>
                                    <td style="font-family:Tahoma,Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#202020;line-height:1.5">
                                    </td>
                                </tr>
                                <tr height="16px"></tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr height="32px">
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>

        <tr>
            <td style="max-width:600px;font-family:Tahoma,Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#bcbcbc;line-height:1.5">
                <a style="text-decoration: none" href="{{route('xadmin.contact.index')}}">مشاهده جزئیات</a></td>

        </tr>
        </tbody>
    </table>
</div>