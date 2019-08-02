"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
class LibraVMStatusError {
    constructor(errorType, validationStatus, verificationStatusList, invariantViolation, deserializationError, executionError) {
        this.errorType = errorType;
        this.validationStatusError = validationStatus;
        this.verificationStatusErrors = verificationStatusList;
        this.invariantViolationError = invariantViolation;
        this.deserializationError = deserializationError;
        this.executionError = executionError;
    }
}
exports.LibraVMStatusError = LibraVMStatusError;
var LibraErrorType;
(function (LibraErrorType) {
    LibraErrorType[LibraErrorType["ERRORTYPE_NOT_SET"] = 0] = "ERRORTYPE_NOT_SET";
    LibraErrorType[LibraErrorType["VALIDATION"] = 1] = "VALIDATION";
    LibraErrorType[LibraErrorType["VERIFICATION"] = 2] = "VERIFICATION";
    LibraErrorType[LibraErrorType["INVARIANT_VIOLATION"] = 3] = "INVARIANT_VIOLATION";
    LibraErrorType[LibraErrorType["DESERIALIZATION"] = 4] = "DESERIALIZATION";
    LibraErrorType[LibraErrorType["EXECUTION"] = 5] = "EXECUTION";
})(LibraErrorType = exports.LibraErrorType || (exports.LibraErrorType = {}));
// copy of pb.VMValidationStatusCode
var LibraValidationStatusCode;
(function (LibraValidationStatusCode) {
    LibraValidationStatusCode[LibraValidationStatusCode["UNKNOWNVALIDATIONSTATUS"] = 0] = "UNKNOWNVALIDATIONSTATUS";
    LibraValidationStatusCode[LibraValidationStatusCode["INVALIDSIGNATURE"] = 1] = "INVALIDSIGNATURE";
    LibraValidationStatusCode[LibraValidationStatusCode["INVALIDAUTHKEY"] = 2] = "INVALIDAUTHKEY";
    LibraValidationStatusCode[LibraValidationStatusCode["SEQUENCENUMBERTOOOLD"] = 3] = "SEQUENCENUMBERTOOOLD";
    LibraValidationStatusCode[LibraValidationStatusCode["SEQUENCENUMBERTOONEW"] = 4] = "SEQUENCENUMBERTOONEW";
    LibraValidationStatusCode[LibraValidationStatusCode["INSUFFICIENTBALANCEFORTRANSACTIONFEE"] = 5] = "INSUFFICIENTBALANCEFORTRANSACTIONFEE";
    LibraValidationStatusCode[LibraValidationStatusCode["TRANSACTIONEXPIRED"] = 6] = "TRANSACTIONEXPIRED";
    LibraValidationStatusCode[LibraValidationStatusCode["SENDINGACCOUNTDOESNOTEXIST"] = 7] = "SENDINGACCOUNTDOESNOTEXIST";
    LibraValidationStatusCode[LibraValidationStatusCode["REJECTEDWRITESET"] = 8] = "REJECTEDWRITESET";
    LibraValidationStatusCode[LibraValidationStatusCode["INVALIDWRITESET"] = 9] = "INVALIDWRITESET";
    LibraValidationStatusCode[LibraValidationStatusCode["EXCEEDEDMAXTRANSACTIONSIZE"] = 10] = "EXCEEDEDMAXTRANSACTIONSIZE";
    LibraValidationStatusCode[LibraValidationStatusCode["UNKNOWNSCRIPT"] = 11] = "UNKNOWNSCRIPT";
    LibraValidationStatusCode[LibraValidationStatusCode["UNKNOWNMODULE"] = 12] = "UNKNOWNMODULE";
    LibraValidationStatusCode[LibraValidationStatusCode["MAXGASUNITSEXCEEDSMAXGASUNITSBOUND"] = 13] = "MAXGASUNITSEXCEEDSMAXGASUNITSBOUND";
    LibraValidationStatusCode[LibraValidationStatusCode["MAXGASUNITSBELOWMINTRANSACTIONGASUNITS"] = 14] = "MAXGASUNITSBELOWMINTRANSACTIONGASUNITS";
    LibraValidationStatusCode[LibraValidationStatusCode["GASUNITPRICEBELOWMINBOUND"] = 15] = "GASUNITPRICEBELOWMINBOUND";
    LibraValidationStatusCode[LibraValidationStatusCode["GASUNITPRICEABOVEMAXBOUND"] = 16] = "GASUNITPRICEABOVEMAXBOUND";
})(LibraValidationStatusCode = exports.LibraValidationStatusCode || (exports.LibraValidationStatusCode = {}));
class LibraVerificationStatusError {
    constructor(status, moduleIndex, error, message) {
        this.status = status;
        this.moduleIndex = moduleIndex;
        this.error = error;
        this.message = message;
    }
}
exports.LibraVerificationStatusError = LibraVerificationStatusError;
var LibraVerificationStatusKind;
(function (LibraVerificationStatusKind) {
    LibraVerificationStatusKind[LibraVerificationStatusKind["SCRIPT"] = 0] = "SCRIPT";
    LibraVerificationStatusKind[LibraVerificationStatusKind["MODULE"] = 1] = "MODULE";
})(LibraVerificationStatusKind = exports.LibraVerificationStatusKind || (exports.LibraVerificationStatusKind = {}));
var LibraVerificationError;
(function (LibraVerificationError) {
    LibraVerificationError[LibraVerificationError["UNKNOWNVERIFICATIONERROR"] = 0] = "UNKNOWNVERIFICATIONERROR";
    LibraVerificationError[LibraVerificationError["INDEXOUTOFBOUNDS"] = 1] = "INDEXOUTOFBOUNDS";
    LibraVerificationError[LibraVerificationError["RANGEOUTOFBOUNDS"] = 2] = "RANGEOUTOFBOUNDS";
    LibraVerificationError[LibraVerificationError["INVALIDSIGNATURETOKEN"] = 3] = "INVALIDSIGNATURETOKEN";
    LibraVerificationError[LibraVerificationError["INVALIDFIELDDEFREFERENCE"] = 4] = "INVALIDFIELDDEFREFERENCE";
    LibraVerificationError[LibraVerificationError["RECURSIVESTRUCTDEFINITION"] = 5] = "RECURSIVESTRUCTDEFINITION";
    LibraVerificationError[LibraVerificationError["INVALIDRESOURCEFIELD"] = 6] = "INVALIDRESOURCEFIELD";
    LibraVerificationError[LibraVerificationError["INVALIDFALLTHROUGH"] = 7] = "INVALIDFALLTHROUGH";
    LibraVerificationError[LibraVerificationError["JOINFAILURE"] = 8] = "JOINFAILURE";
    LibraVerificationError[LibraVerificationError["NEGATIVESTACKSIZEWITHINBLOCK"] = 9] = "NEGATIVESTACKSIZEWITHINBLOCK";
    LibraVerificationError[LibraVerificationError["UNBALANCEDSTACK"] = 10] = "UNBALANCEDSTACK";
    LibraVerificationError[LibraVerificationError["INVALIDMAINFUNCTIONSIGNATURE"] = 11] = "INVALIDMAINFUNCTIONSIGNATURE";
    LibraVerificationError[LibraVerificationError["DUPLICATEELEMENT"] = 12] = "DUPLICATEELEMENT";
    LibraVerificationError[LibraVerificationError["INVALIDMODULEHANDLE"] = 13] = "INVALIDMODULEHANDLE";
    LibraVerificationError[LibraVerificationError["UNIMPLEMENTEDHANDLE"] = 14] = "UNIMPLEMENTEDHANDLE";
    LibraVerificationError[LibraVerificationError["INCONSISTENTFIELDS"] = 15] = "INCONSISTENTFIELDS";
    LibraVerificationError[LibraVerificationError["UNUSEDFIELDS"] = 16] = "UNUSEDFIELDS";
    LibraVerificationError[LibraVerificationError["LOOKUPFAILED"] = 17] = "LOOKUPFAILED";
    LibraVerificationError[LibraVerificationError["VISIBILITYMISMATCH"] = 18] = "VISIBILITYMISMATCH";
    LibraVerificationError[LibraVerificationError["TYPERESOLUTIONFAILURE"] = 19] = "TYPERESOLUTIONFAILURE";
    LibraVerificationError[LibraVerificationError["TYPEMISMATCH"] = 20] = "TYPEMISMATCH";
    LibraVerificationError[LibraVerificationError["MISSINGDEPENDENCY"] = 21] = "MISSINGDEPENDENCY";
    LibraVerificationError[LibraVerificationError["POPREFERENCEERROR"] = 22] = "POPREFERENCEERROR";
    LibraVerificationError[LibraVerificationError["POPRESOURCEERROR"] = 23] = "POPRESOURCEERROR";
    LibraVerificationError[LibraVerificationError["RELEASEREFTYPEMISMATCHERROR"] = 24] = "RELEASEREFTYPEMISMATCHERROR";
    LibraVerificationError[LibraVerificationError["BRTYPEMISMATCHERROR"] = 25] = "BRTYPEMISMATCHERROR";
    LibraVerificationError[LibraVerificationError["ASSERTTYPEMISMATCHERROR"] = 26] = "ASSERTTYPEMISMATCHERROR";
    LibraVerificationError[LibraVerificationError["STLOCTYPEMISMATCHERROR"] = 27] = "STLOCTYPEMISMATCHERROR";
    LibraVerificationError[LibraVerificationError["STLOCUNSAFETODESTROYERROR"] = 28] = "STLOCUNSAFETODESTROYERROR";
    LibraVerificationError[LibraVerificationError["RETUNSAFETODESTROYERROR"] = 29] = "RETUNSAFETODESTROYERROR";
    LibraVerificationError[LibraVerificationError["RETTYPEMISMATCHERROR"] = 30] = "RETTYPEMISMATCHERROR";
    LibraVerificationError[LibraVerificationError["FREEZEREFTYPEMISMATCHERROR"] = 31] = "FREEZEREFTYPEMISMATCHERROR";
    LibraVerificationError[LibraVerificationError["FREEZEREFEXISTSMUTABLEBORROWERROR"] = 32] = "FREEZEREFEXISTSMUTABLEBORROWERROR";
    LibraVerificationError[LibraVerificationError["BORROWFIELDTYPEMISMATCHERROR"] = 33] = "BORROWFIELDTYPEMISMATCHERROR";
    LibraVerificationError[LibraVerificationError["BORROWFIELDBADFIELDERROR"] = 34] = "BORROWFIELDBADFIELDERROR";
    LibraVerificationError[LibraVerificationError["BORROWFIELDEXISTSMUTABLEBORROWERROR"] = 35] = "BORROWFIELDEXISTSMUTABLEBORROWERROR";
    LibraVerificationError[LibraVerificationError["COPYLOCUNAVAILABLEERROR"] = 36] = "COPYLOCUNAVAILABLEERROR";
    LibraVerificationError[LibraVerificationError["COPYLOCRESOURCEERROR"] = 37] = "COPYLOCRESOURCEERROR";
    LibraVerificationError[LibraVerificationError["COPYLOCEXISTSBORROWERROR"] = 38] = "COPYLOCEXISTSBORROWERROR";
    LibraVerificationError[LibraVerificationError["MOVELOCUNAVAILABLEERROR"] = 39] = "MOVELOCUNAVAILABLEERROR";
    LibraVerificationError[LibraVerificationError["MOVELOCEXISTSBORROWERROR"] = 40] = "MOVELOCEXISTSBORROWERROR";
    LibraVerificationError[LibraVerificationError["BORROWLOCREFERENCEERROR"] = 41] = "BORROWLOCREFERENCEERROR";
    LibraVerificationError[LibraVerificationError["BORROWLOCUNAVAILABLEERROR"] = 42] = "BORROWLOCUNAVAILABLEERROR";
    LibraVerificationError[LibraVerificationError["BORROWLOCEXISTSBORROWERROR"] = 43] = "BORROWLOCEXISTSBORROWERROR";
    LibraVerificationError[LibraVerificationError["CALLTYPEMISMATCHERROR"] = 44] = "CALLTYPEMISMATCHERROR";
    LibraVerificationError[LibraVerificationError["CALLBORROWEDMUTABLEREFERENCEERROR"] = 45] = "CALLBORROWEDMUTABLEREFERENCEERROR";
    LibraVerificationError[LibraVerificationError["PACKTYPEMISMATCHERROR"] = 46] = "PACKTYPEMISMATCHERROR";
    LibraVerificationError[LibraVerificationError["UNPACKTYPEMISMATCHERROR"] = 47] = "UNPACKTYPEMISMATCHERROR";
    LibraVerificationError[LibraVerificationError["READREFTYPEMISMATCHERROR"] = 48] = "READREFTYPEMISMATCHERROR";
    LibraVerificationError[LibraVerificationError["READREFRESOURCEERROR"] = 49] = "READREFRESOURCEERROR";
    LibraVerificationError[LibraVerificationError["READREFEXISTSMUTABLEBORROWERROR"] = 50] = "READREFEXISTSMUTABLEBORROWERROR";
    LibraVerificationError[LibraVerificationError["WRITEREFTYPEMISMATCHERROR"] = 51] = "WRITEREFTYPEMISMATCHERROR";
    LibraVerificationError[LibraVerificationError["WRITEREFRESOURCEERROR"] = 52] = "WRITEREFRESOURCEERROR";
    LibraVerificationError[LibraVerificationError["WRITEREFEXISTSBORROWERROR"] = 53] = "WRITEREFEXISTSBORROWERROR";
    LibraVerificationError[LibraVerificationError["WRITEREFNOMUTABLEREFERENCEERROR"] = 54] = "WRITEREFNOMUTABLEREFERENCEERROR";
    LibraVerificationError[LibraVerificationError["INTEGEROPTYPEMISMATCHERROR"] = 55] = "INTEGEROPTYPEMISMATCHERROR";
    LibraVerificationError[LibraVerificationError["BOOLEANOPTYPEMISMATCHERROR"] = 56] = "BOOLEANOPTYPEMISMATCHERROR";
    LibraVerificationError[LibraVerificationError["EQUALITYOPTYPEMISMATCHERROR"] = 57] = "EQUALITYOPTYPEMISMATCHERROR";
    LibraVerificationError[LibraVerificationError["EXISTSRESOURCETYPEMISMATCHERROR"] = 58] = "EXISTSRESOURCETYPEMISMATCHERROR";
    LibraVerificationError[LibraVerificationError["BORROWGLOBALTYPEMISMATCHERROR"] = 59] = "BORROWGLOBALTYPEMISMATCHERROR";
    LibraVerificationError[LibraVerificationError["BORROWGLOBALNORESOURCEERROR"] = 60] = "BORROWGLOBALNORESOURCEERROR";
    LibraVerificationError[LibraVerificationError["MOVEFROMTYPEMISMATCHERROR"] = 61] = "MOVEFROMTYPEMISMATCHERROR";
    LibraVerificationError[LibraVerificationError["MOVEFROMNORESOURCEERROR"] = 62] = "MOVEFROMNORESOURCEERROR";
    LibraVerificationError[LibraVerificationError["MOVETOSENDERTYPEMISMATCHERROR"] = 63] = "MOVETOSENDERTYPEMISMATCHERROR";
    LibraVerificationError[LibraVerificationError["MOVETOSENDERNORESOURCEERROR"] = 64] = "MOVETOSENDERNORESOURCEERROR";
    LibraVerificationError[LibraVerificationError["CREATEACCOUNTTYPEMISMATCHERROR"] = 65] = "CREATEACCOUNTTYPEMISMATCHERROR";
    LibraVerificationError[LibraVerificationError["MODULEADDRESSDOESNOTMATCHSENDER"] = 66] = "MODULEADDRESSDOESNOTMATCHSENDER";
    LibraVerificationError[LibraVerificationError["NOMODULEHANDLES"] = 67] = "NOMODULEHANDLES";
})(LibraVerificationError = exports.LibraVerificationError || (exports.LibraVerificationError = {}));
var LibraInvariantViolationError;
(function (LibraInvariantViolationError) {
    LibraInvariantViolationError[LibraInvariantViolationError["UNKNOWNINVARIANTVIOLATIONERROR"] = 0] = "UNKNOWNINVARIANTVIOLATIONERROR";
    LibraInvariantViolationError[LibraInvariantViolationError["OUTOFBOUNDSINDEX"] = 1] = "OUTOFBOUNDSINDEX";
    LibraInvariantViolationError[LibraInvariantViolationError["OUTOFBOUNDSRANGE"] = 2] = "OUTOFBOUNDSRANGE";
    LibraInvariantViolationError[LibraInvariantViolationError["EMPTYVALUESTACK"] = 3] = "EMPTYVALUESTACK";
    LibraInvariantViolationError[LibraInvariantViolationError["EMPTYCALLSTACK"] = 4] = "EMPTYCALLSTACK";
    LibraInvariantViolationError[LibraInvariantViolationError["PCOVERFLOW"] = 5] = "PCOVERFLOW";
    LibraInvariantViolationError[LibraInvariantViolationError["LINKERERROR"] = 6] = "LINKERERROR";
    LibraInvariantViolationError[LibraInvariantViolationError["LOCALREFERENCEERROR"] = 7] = "LOCALREFERENCEERROR";
    LibraInvariantViolationError[LibraInvariantViolationError["STORAGEERROR"] = 8] = "STORAGEERROR";
})(LibraInvariantViolationError = exports.LibraInvariantViolationError || (exports.LibraInvariantViolationError = {}));
// copy of pb.BinaryError
var LibraDeserializationError;
(function (LibraDeserializationError) {
    LibraDeserializationError[LibraDeserializationError["UNKNOWNBINARYERROR"] = 0] = "UNKNOWNBINARYERROR";
    LibraDeserializationError[LibraDeserializationError["MALFORMED"] = 1] = "MALFORMED";
    LibraDeserializationError[LibraDeserializationError["BADMAGIC"] = 2] = "BADMAGIC";
    LibraDeserializationError[LibraDeserializationError["UNKNOWNVERSION"] = 3] = "UNKNOWNVERSION";
    LibraDeserializationError[LibraDeserializationError["UNKNOWNTABLETYPE"] = 4] = "UNKNOWNTABLETYPE";
    LibraDeserializationError[LibraDeserializationError["UNKNOWNSIGNATURETYPE"] = 5] = "UNKNOWNSIGNATURETYPE";
    LibraDeserializationError[LibraDeserializationError["UNKNOWNSERIALIZEDTYPE"] = 6] = "UNKNOWNSERIALIZEDTYPE";
    LibraDeserializationError[LibraDeserializationError["UNKNOWNOPCODE"] = 7] = "UNKNOWNOPCODE";
    LibraDeserializationError[LibraDeserializationError["BADHEADERTABLE"] = 8] = "BADHEADERTABLE";
    LibraDeserializationError[LibraDeserializationError["UNEXPECTEDSIGNATURETYPE"] = 9] = "UNEXPECTEDSIGNATURETYPE";
    LibraDeserializationError[LibraDeserializationError["DUPLICATETABLE"] = 10] = "DUPLICATETABLE";
})(LibraDeserializationError = exports.LibraDeserializationError || (exports.LibraDeserializationError = {}));
var LibraExecutionErrorType;
(function (LibraExecutionErrorType) {
    LibraExecutionErrorType[LibraExecutionErrorType["EXECUTIONSTATUS_NOT_SET"] = 0] = "EXECUTIONSTATUS_NOT_SET";
    LibraExecutionErrorType[LibraExecutionErrorType["RUNTIME_STATUS"] = 1] = "RUNTIME_STATUS";
    LibraExecutionErrorType[LibraExecutionErrorType["ASSERTION_FAILURE"] = 2] = "ASSERTION_FAILURE";
    LibraExecutionErrorType[LibraExecutionErrorType["ARITHMETIC_ERROR"] = 3] = "ARITHMETIC_ERROR";
    LibraExecutionErrorType[LibraExecutionErrorType["REFERENCE_ERROR"] = 4] = "REFERENCE_ERROR";
})(LibraExecutionErrorType = exports.LibraExecutionErrorType || (exports.LibraExecutionErrorType = {}));
